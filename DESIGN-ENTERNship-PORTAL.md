# ctoi — Design & Architecture Plan

*Version 2.0 — UI/UX & Workflow Documentation*

## Executive Summary

**ctoi** is a world-class, high-performance internship portal that bridges premium design with heavy backend processing. **Companies** post opportunities and search a structured candidate database; **candidates** submit resumes and apply; **admins** process resumes via Google Gemini API. All users authenticate via Google OAuth.

**Core principle:** Move beyond standard WordPress practices. The **visual layer (Theme)** is strictly separated from the **logic layer (Plugin)** to ensure scalability, performance, and maintainability.

---

## 1. Architecture Overview

```
┌─────────────────────────────────────────────────────────────────────────────────┐
│                           CTOI ECOSYSTEM                                          │
├─────────────────────────────────────────────────────────────────────────────────┤
│  THEME (ctoi)             │  PLUGIN (ctoi-portal)         │  EXTERNAL            │
│  • Corporate Clean UI     │  • CPTs (internships, cos)    │  • Google OAuth      │
│  • Tailwind JIT, FSE      │  • Custom DB (candidates)     │  • Gemini API        │
│  • Block patterns         │  • Action Scheduler queue     │  • Elasticsearch     │
│  • Fragment caching       │  • REST API, faceted search   │  • CDN               │
│  • Material Icons         │  • Multi-step post form       │                      │
└─────────────────────────────────────────────────────────────────────────────────┘
```

**Separation of concerns:**
- **Theme**: Presentation only — layout, styling, block patterns, no business logic
- **Plugin**: All logic — CPTs, custom tables, auth, AI pipeline, search, REST API

---

## 2. Visual Identity & Design System

**Concept:** *"Corporate Clean"* — Google Careers aesthetic with Material Design principles. Option: *"Minimalist Luxury"* (gold accents) as a style variation.

### 2.1 Color Palette (Primary: Google Careers)

| Token | Hex | Usage |
|-------|-----|-------|
| **Google Blue** | `#1A73E8` | Primary actions, links, active states, accent text |
| **Deep Charcoal** | `#202124` | Primary headings, body text, brand names |
| **Muted Grey** | `#5F6368` | Secondary text, icons, meta-data, disabled states |
| **Border Color** | `#DADCE0` | Card borders, input outlines, dividers |
| **Subtle Background** | `#F8F9FA` | Dashboard backgrounds, alternate sections |
| **Success Green** | `#34A853` | "New" badges, Hired status, verification icons |
| **Alert Red** | `#EA4335` | Error messages, Rejected status |
| **Base** | `#FFFFFF` | Cards, inputs, modal backgrounds |

### 2.2 Optional: Luxury Palette (theme.json variation)

| Token | Hex | Usage |
|-------|-----|-------|
| **Primary Action** | `#D4AF37` / `#C5A028` | Gold buttons, key borders, CTAs |
| **Gold Light** | `#F5E6C8` | Subtle backgrounds, hover states |
| **Gold Dark** | `#B8860B` | Hover on primary buttons |

### 2.3 Typography

| Element | Font | Weight | Rationale |
|---------|------|--------|-----------|
| **Headings** | Inter | 500–600 (semi-bold) | Tight letter-spacing, professional |
| **Body** | Inter | 400 | Line-height 1.6, high legibility |
| **Monospace** | System mono | — | Metadata badges, alignment |

- **Primary font:** Inter (sans-serif) for all UI and body
- **Fluid typography** via theme.json
- **font-display: swap** for non-blocking load

### 2.4 UI Components

| Component | Spec |
|-----------|------|
| **Buttons** | 4px border-radius, 500 weight text, high-contrast hover states |
| **Cards** | 8px border-radius, 1px solid `#DADCE0`, `box-shadow: 0 1px 2px rgba(0,0,0,0.05)` |
| **Inputs** | Minimalist 1px border; transitions to 2px Google Blue on focus |
| **Pills** | Circular badges for status (Pending, Interviewing, Rejected, Hired) and categories |
| **Glassmorphism** (optional) | `backdrop-filter: blur()`, subtle shadows for depth |

### 2.5 Layout & Effects

- **Spacing:** Generous whitespace — max-width 1280px container, section padding 48–96px
- **Borders:** Thin accents on focus/hover — 1px → 2px Google Blue transition
- **Material Icons:** Search prefix, status icons, action icons

### 2.6 Public UI Components

#### Homepage (Hero Discovery)

| Element | Spec |
|---------|------|
| **Hero Heading** | Large 64px: "Build for everyone." — Blue accent on "everyone" |
| **Global Search** | Wide pill-shaped input, Material Icons search prefix; shadow intensifies on focus |
| **Feature Grid** | Three-column layout, Material Icons in colored circular containers (Blue, Green, Red) |
| **Life at ctoi** | Alternating image/text blocks describing culture |

#### Internship Archive (`/internships`)

| Area | Spec |
|------|------|
| **Left Sidebar** | "Filter by Category" vertical list; "Work Locations" checkboxes with custom SVG checkmarks |
| **Job Cards** | Whitespace-heavy; title in blue (underline on hover) |
| **Metadata Row** | Company name (bold), Location icon + text, Term icon + text |
| **Snippet** | 2-line truncated description |
| **Status Tags** | "New" badge (Success Green) for roles posted within 48 hours |

---

## 3. Database Strategy

> **Critical:** Do *not* use `wp_postmeta` for the Resume/Candidate database. It is too slow for searching thousands of candidates.

### A. Custom Post Types (CPT)

| CPT | Purpose | Storage | SEO |
|-----|---------|---------|-----|
| **Internships** | Job listings | `wp_posts` + meta | ✅ JobPosting Schema |
| **Companies** | Company profiles | `wp_posts` + meta | ✅ Organization Schema |

### B. Custom Database Tables

**`wp_candidate_data`** — High-performance candidate search

```sql
CREATE TABLE wp_candidate_data (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id BIGINT UNSIGNED NOT NULL,
  resume_file_url VARCHAR(500),
  resume_thumbnail_url VARCHAR(500),
  full_name VARCHAR(255),
  email VARCHAR(255),
  skills JSON,
  experience_years INT,
  education TEXT,
  summary TEXT,
  location VARCHAR(255),
  gemini_processed TINYINT(1) DEFAULT 0,
  created_at DATETIME,
  updated_at DATETIME,
  INDEX idx_skills (skills(100)),
  INDEX idx_experience (experience_years),
  INDEX idx_location (location),
  INDEX idx_gemini (gemini_processed),
  FULLTEXT idx_search (full_name, summary, education)
) ENGINE=InnoDB;
```

- **Indexed columns** for fast filtering: skills, experience, location
- **FULLTEXT** for keyword search (or use Elasticsearch for scale)
- **JSON** for skills array — queryable in MySQL 5.7+

### C. Applications Table (Optional but Recommended)

**`wp_internship_applications`** — Avoid postmeta for application status queries

```sql
CREATE TABLE wp_internship_applications (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id BIGINT UNSIGNED NOT NULL,
  internship_id BIGINT UNSIGNED NOT NULL,
  candidate_data_id BIGINT UNSIGNED,
  cover_letter TEXT,
  status ENUM('pending','viewed','shortlisted','interviewing','rejected','hired','withdrawn') DEFAULT 'pending',
  created_at DATETIME,
  INDEX idx_internship (internship_id),
  INDEX idx_user (user_id),
  INDEX idx_status (status)
);
```

### D. Search Engine Options

| Option | Use Case | Complexity |
|--------|----------|------------|
| **MySQL FULLTEXT** | <10K candidates, simple queries | Low |
| **Relevanssi** (custom table integration) | Medium scale | Medium |
| **Elasticsearch** | 10K+ candidates, faceted search | High |

---

## 4. The Gemini AI Pipeline

Resume processing is resource-intensive. **Decouple from user experience** to prevent site crashes.

### Flow

```
1. SUBMISSION     Candidate uploads PDF
        ↓
2. QUEUEING       File saved → Job added to Action Scheduler
        ↓
3. EXTRACTION     Background: PDF→text → Gemini API
        ↓
4. STORAGE        JSON mapped to wp_candidate_data
```

### Detailed Steps

1. **Submission:** Candidate uploads PDF/DOC. File stored in `wp-content/uploads/resumes/`. Row created in `wp_candidate_data` with `gemini_processed = 0`.

2. **Queueing:** Action Scheduler job created: `ctoi_process_resume_{id}`. Runs asynchronously.

3. **Extraction (Background):**
   - Convert PDF to text (e.g., `pdftotext`, `smalot/pdfparser`, or Imagick)
   - Send text to **Gemini API** with strict JSON schema prompt

4. **Prompt Engineering (Critical):**
   - Normalize skills: "JS", "Javascript", "React.js" → unified "JavaScript"
   - Return structured JSON only — no markdown, no prose

**Example prompt:**
```
Extract the following from this resume text. Return ONLY valid JSON, no other text.

Schema:
{
  "full_name": "string",
  "email": "string",
  "skills": ["string"],  // Normalize: use "JavaScript" not "JS", "Python" not "Py"
  "experience_years": number,
  "education": "string",
  "summary": "string",
  "location": "string"
}

Resume text:
---
{resume_text}
---
```

5. **Storage:** Parse response, validate, upsert into `wp_candidate_data`. Set `gemini_processed = 1`.

### Resume Preview (Performance)

- **Do not** load full PDF for list views
- On upload: generate JPG thumbnail of first page via **ImageMagick** or **Imagick** (PHP)
- Store `resume_thumbnail_url` in `wp_candidate_data`
- Display thumbnail in candidate cards; full PDF only on detail view

---

## 5. User Roles & Authentication

| Role | WP Role | Access Level | Primary Actions |
|------|---------|--------------|-----------------|
| **Public (Guest)** | — | Read-only | View homepage, search internships, view single internship, access login/register |
| **Candidate** (Student) | `candidate_user` | Authenticated | Apply, dashboard (track status), upload/edit resume, view profile |
| **Company** (Employer) | `company_user` | Authenticated | Post internships, dashboard (manage listings, applicants), search candidates |
| **Admin** | `administrator` | System owner | Manage users, moderate internships, system settings |

### Auth Options

| Option | Pros | Cons |
|--------|------|------|
| **Nextend Social Login** | Easy, WP-native | Plugin dependency |
| **Firebase Auth** | Scalable, Google-first | External service, JS-heavy |
| **Custom (league/oauth2-google)** | Full control | More dev effort |

**Recommendation:** Nextend for Phase 1; evaluate Firebase if scaling auth load.

- On first login: prompt role selection (Candidate / Company)
- Store `google_id`, `email`, `avatar_url` in user meta

---

## 6. Core Features Implementation

| Feature | Strategy |
|---------|----------|
| **Authentication** | Firebase Auth or Nextend Social Login. Map to `company_user`, `candidate_user`. |
| **Resume Preview** | JPG thumbnail via ImageMagick on upload. No PDF load in listings. |
| **Internship Posting** | Frontend form (React/HTMX). **No WP Admin access** for companies. Auto-generates JobPosting Schema. |
| **Candidate Search** | AJAX-powered faceted search. Query `wp_candidate_data`, not post meta. |
| **Apply Button** | Fragment-cached listing + placeholder. Load user-specific state (applied/not) via lightweight API. |

### No WP Admin for End Users

- Companies and candidates never see `wp-admin`
- All actions via custom frontend templates + REST API
- Admin-only: resume processing queue, settings, user management

---

## 6A. Dashboard UI Specifications

### Student (Candidate) Dashboard — "Application Command Center"

| Section | Spec |
|---------|------|
| **Welcome** | "Welcome back, [Name]" |
| **Stats Overview** | Three white cards with large-digit counters: |
| | • **Applications Submitted** — count from `wp_internship_applications` |
| | • **Profile Views** — count of employer profile clicks |
| | • **Upcoming Interviews** — highlighted (subtle blue bg) if count > 0 |
| **Application Table** | Columns: Position, Company, Status, Date, Actions |
| **Status Pills** | `Pending` (grey), `Interviewing` (light blue bg + dark blue text), `Rejected` (light red bg), `Shortlisted` (green), `Hired` (success green) |
| **Actions** | "View Details" (eye icon), "Withdraw" (trash icon) |
| **Gemini Resume Insight** | Sidebar: dashed "Drop Zone" for upload; processing state: pulsing "Auto Awesome" icon + "Gemini is analyzing your potential..."; output: list of "Verified Skills" from PDF |

### Company (Employer) Dashboard — "Hiring Efficiency"

| Section | Spec |
|---------|------|
| **Welcome** | "Welcome, [Company Name]" |
| **Employer Analytics** | **Active Listings**, **Total Applicants**, **Pending Reviews** (highlighted if > 0) |
| **Job Management Table** | Columns: Position, Applicants (clickable link), Status (Active/Draft/Closed), Actions |
| **Actions** | "Edit Listing", "View Applicants", "Close Role" |

### Post Internship Workflow (Multi-Step)

| Step | Fields |
|------|--------|
| **1. Role Details** | Title, Category, Term (taxonomy dropdown) |
| **2. Location** | Selection from `internship_location` taxonomy |
| **3. Description** | Rich-text editor for responsibilities and perks |
| **4. Review & Publish** | Summary view; Publish or Save Draft |

---

## 7. Performance & Caching Strategy

### Fragment Caching

| Content | Cache? | Strategy |
|---------|--------|----------|
| Internship listing cards | ✅ Yes | Cache globally (public data) |
| Apply button state | ❌ No | Placeholder + AJAX load user-specific state |
| Candidate search results | ⚠️ Short TTL | 5–10 min or no cache (dynamic filters) |
| Company dashboard | ❌ No | User-specific |

- Use **ESI (Edge Side Includes)** or **AJAX** for user-specific fragments
- Cache key: `ctoi_internships_list_{page}_{filters_hash}`

### Asset Optimization

| Asset | Strategy |
|-------|----------|
| **CSS** | **Tailwind CSS** with JIT — generates <10kb for used utilities |
| **JS** | Defer non-critical, no jQuery unless required |
| **Fonts** | Preload Playfair + Inter, `font-display: swap` |
| **Images** | WebP/AVIF, `srcset`, lazy load |
| **CDN** | Serve all static assets via CDN |

### Database & Object Cache

- `wp_cache_set` / `wp_cache_get` for complex queries (e.g., "Top 10 Python candidates")
- Redis/Memcached for transients, session-like data
- Index all filter columns in `wp_candidate_data`

---

## 8. SEO Optimization (Schema.org)

Google Job Search requires strict structured data.

### Automatic JobPosting Schema (per Internship CPT)

```json
{
  "@context": "https://schema.org/",
  "@type": "JobPosting",
  "title": "Software Engineering Intern",
  "description": "...",
  "datePosted": "2025-02-04",
  "validThrough": "2025-03-15",
  "employmentType": "INTERN",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "Acme Corp",
    "sameAs": "https://acme.com"
  },
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "San Francisco"
    }
  },
  "directApply": true,
  "identifier": {
    "@type": "PropertyValue",
    "value": "internship-123"
  }
}
```

### Sitemaps

- **Separate sitemaps:** Internships, Company profiles, static pages
- Exclude: dashboard, search results, user-specific pages

---

## 9. File Structure

```
wp-content/
├── themes/ctoi/
│   ├── theme.json                  # ctoi palette, Playfair + Inter
│   ├── styles/
│   │   └── ctoi-luxury.json        # Style variation
│   ├── patterns/
│   │   ├── hero-internship.php
│   │   ├── internship-grid.php
│   │   ├── candidate-search-faceted.php
│   │   └── application-form.php
│   ├── parts/
│   │   ├── header-ctoi.html
│   │   └── footer-ctoi.html
│   └── assets/
│       └── tailwind/               # Tailwind build output
│
└── plugins/ctoi-portal/
    ├── ctoi-portal.php
    ├── includes/
    │   ├── class-cpt-internship.php
    │   ├── class-cpt-company.php
    │   ├── class-db-candidate.php       # Custom table CRUD
    │   ├── class-db-migration.php       # SQL migrations
    │   ├── class-google-oauth.php
    │   ├── class-gemini-processor.php   # API + prompt engineering
    │   ├── class-candidate-search.php   # Faceted search
    │   ├── class-resume-thumbnail.php   # ImageMagick thumbnail
    │   └── class-rest-api.php
    ├── admin/
    │   └── resume-processor.php
    ├── assets/
    │   ├── css/                    # Tailwind output
    │   └── js/                     # HTMX/React forms
    └── migrations/
        └── 001_create_candidate_data.sql
```

---

## 10. Development Roadmap (Phase 1)

| Step | Scope | Deliverable |
|------|-------|-------------|
| **1** | CPTs | Register `internships`, `companies` |
| **2** | Custom DB | SQL migration for `wp_candidate_data`, `wp_internship_applications` |
| **3** | Google Auth | Login flow, role selection, user mapping |
| **4** | AI Integration | Gemini processor: PDF→text, API call, prompt engineering, skill normalization, storage |
| **5** | Resume Upload | Upload handler, thumbnail generation, Action Scheduler queue |
| **6** | Theme | ctoi palette, glassmorphism, Playfair + Inter |

---

## 11. Security Considerations

- **Nonces** on all forms and AJAX
- **Capability checks** on every REST endpoint
- **File upload:** Validate type (PDF/DOC), size limit, optional malware scan
- **Sanitize** all inputs, **escape** all outputs
- **HTTPS** enforced
- **Rate limiting** on login, search, API

---

## 12. Recommended Plugins

| Plugin | Purpose |
|--------|---------|
| **Nextend Social Login** or **Firebase** | Google OAuth |
| **Action Scheduler** | Resume processing queue (bundled with WooCommerce or standalone) |
| **Redis Object Cache** | Object caching |
| **LiteSpeed Cache** or **WP Rocket** | Page cache, fragment cache |
| **Yoast SEO** or **Rank Math** | Meta, sitemaps (extend with JobPosting) |

---

## Summary

**ctoi** achieves world-class performance by:

1. **Separating** theme (visual) from plugin (logic)
2. **Using custom tables** for candidate data — no postmeta for search
3. **Decoupling** Gemini processing via Action Scheduler
4. **Fragment caching** public content, AJAX for user-specific state
5. **Tailwind JIT** for minimal CSS
6. **Strict Schema.org** for Google Job Search
7. **Prompt engineering** for normalized, queryable skill data

**Design:** Corporate Clean / Google Careers aesthetic; Material Design; role-based dashboards (Student, Employer); multi-step Post Internship; faceted search; status pills (Pending, Interviewing, Shortlisted, Hired, Rejected).

**Implemented:** Gemini Resume Parser, Google OAuth, REST API, JobPosting Schema, Resume upload, Admin processor, Candidate search shortcode.

---

## 13. User & System Workflows (Complete)

### A. Authentication Workflow

| Step | Action |
|------|--------|
| **Entry** | User clicks "Sign In" (Header) or "Post Internship" / "Get Matched" (Home Hero) |
| **Login Page** | Centered Google-style card; clean input fields with floating labels (or "Sign in with Google") |
| **Role Choice** | On first login: prompt **Candidate** or **Partner (Company)** selection |
| **Routing** | `candidate_user` → `/my-dashboard/` (or `/student-dashboard/`); `company_user` → `/company-dashboard/` (or `/employer-dashboard/`); `administrator` → WP Admin |
| **Guest Protection** | Guest accessing `/my-dashboard/` or `/company-dashboard/` → redirect to `/login/` |

### B. Candidate (Student) Workflows

| Workflow | Trigger | Steps | API | UI |
|----------|---------|-------|-----|-----|
| **Register/Login** | Click "Sign in with Google" | OAuth → Create/Link user → Assign `candidate_user` | N/A | Login page, CTA shortcode |
| **Upload Resume** | Submit file on /upload-resume/ | Validate PDF/DOC → Save to uploads → Insert `wp_candidate_data` → Queue Gemini job | `POST /resume/upload` | `[ctoi_resume_upload]` |
| **Update Resume** | Replace file | Same as upload, updates existing row or creates new | `POST /resume/upload` | Resume upload form |
| **Delete Resume** | Click delete on dashboard | Soft-delete or remove from candidate_data | `DELETE /resume/:id` | Candidate dashboard |
| **Browse Internships** | Visit /internships/ | Query CPT, show cards with apply state | `GET /internships?applied=1` | Archive template, grid pattern |
| **Apply** | Click "Apply for this Role" on single internship | **Check:** `student_profile` / `wp_candidate_data` exists. If missing → redirect to "Complete Profile" (upload resume). If exists → select resume, cover letter → Insert `wp_internship_applications` | `POST /apply` | Application form pattern |
| **Withdraw Application** | Click withdraw on dashboard | Update status to `withdrawn` | `PUT /applications/:id` | Candidate dashboard |
| **Track Applications** | Visit /my-dashboard/ | List applications with status pills | `GET /my-applications` | Candidate dashboard |
| **View My Profile** | Dashboard | Show resumes, skills (from Gemini), applications | `GET /my-resumes` | Candidate dashboard |

### C. Company (Employer) Workflows

| Workflow | Trigger | Steps | API | UI |
|----------|---------|-------|-----|-----|
| **Register/Login** | Sign in with Google | Same as candidate, assign `company_user` | N/A | For Companies page |
| **Create Company Profile** | First-time setup | Create/update `company` CPT post | `POST /company` | Company onboarding |
| **Post Internship** | Submit form on /post-internship/ | Multi-step: Role Details → Location → Description → Review & Publish | `POST /internships` | Post internship form |
| **Edit Internship** | Click edit on dashboard | Update post + meta | `PUT /internships/:id` | Company dashboard |
| **Close Internship** | Toggle or delete | Set status/draft or trash | `DELETE /internships/:id` | Company dashboard |
| **Search Candidates** | Visit /candidates/ | Faceted search on `wp_candidate_data` | `GET /candidates` | `[ctoi_candidate_search]` |
| **View Applications** | Click applicant count or "View Applicants" | List applications for internship | `GET /applications/:internship_id` | Company dashboard |
| **Shortlist/Reject/Hire** | Click action on application | Update status (Pending → Interviewing → Shortlisted/Hired/Rejected) | `PUT /applications/:id/status` | Company dashboard |

### D. Admin Workflows

| Workflow | Trigger | Steps | UI |
|----------|---------|-------|-----|
| **Process Resume Queue** | Cron/Action Scheduler | Run `ctoi_process_resume` for queued items | WP Admin → ctoi Resume Processor |
| **Manage Users** | wp-admin | Assign roles, view candidates/companies | Users screen |
| **Configure** | wp-admin | Gemini API key, Google OAuth, mock data | ctoi Settings |
| **Bulk Actions** | Admin | Re-process failed resumes | Resume Processor |
| **Taxonomies** | wp-admin | Manage Term (e.g. Spring 2027), internship_location | Taxonomy screens |

### E. System Workflows

| Workflow | Trigger | Steps |
|----------|---------|-------|
| **Resume AI Processing** | Action Scheduler | PDF→text → Gemini API → Parse JSON → Update `wp_candidate_data` |
| **Cache Invalidation** | On internship/application change | Clear fragment cache for affected keys |
| **Schema Output** | Single internship load | Output JobPosting JSON-LD in `<head>` |

---

## 14. Responsive Behavior

| Breakpoint | Layout |
|------------|--------|
| **Mobile (< 768px)** | Navbar → hamburger menu; dashboard tables → Card Stack view; sidebar filters → "Filter" button opens full-screen overlay |
| **Tablet (768px – 1024px)** | Two-column layout; sidebars 30% width |
| **Desktop (> 1024px)** | Max-width 1280px; centralized focus |

---

## 15. Technical Components (WP Architecture)

| Component | WP Implementation |
|-----------|-------------------|
| **Internships** | Custom Post Type (`internship`) |
| **Companies** | Custom Post Type (`company`) |
| **Locations** | Taxonomy (`internship_location`) |
| **Terms** | Taxonomy (`term`) — e.g. Summer 2026, Fall 2026 |
| **Applications** | Custom DB table (`wp_internship_applications`) |
| **Candidate Data** | Custom DB table (`wp_candidate_data`) |
| **Dashboards** | Page templates / block patterns (`page-my-dashboard`, `page-company-dashboard`) |
| **Styling** | Tailwind CSS + CSS variables in `style.css` |

---

## 16. Production Readiness Checklist

### One-Click Setup

**Settings → ctoi Portal → Run Setup Now** creates all required pages and flushes permalinks in one click. On first plugin activation, setup runs automatically if no pages exist. Optionally check "Also populate sample internships, companies & candidates" to fill the site with demo content.

### Page Setup (One-Click)

The theme matches [Google Careers](https://www.google.com/about/careers/applications/) — see Section 2 for full design system.

| Slug | Title | Pattern |
|------|-------|---------|
| `my-dashboard` | My Dashboard | ctoi/page-my-dashboard |
| `company-dashboard` | Company Dashboard | ctoi/page-company-dashboard |
| `post-internship` | Post Internship | ctoi/page-post-internship |
| `upload-resume` | Upload Resume | ctoi/page-upload-resume |
| `candidates` | Search Candidates | ctoi/page-candidates-search |
| `about` | About Us | ctoi/page-about |
| `faq` | FAQ | ctoi/page-faq |
| `login` | Log In | Use page-login pattern |
| `for-companies` | For Companies | ctoi/page-company-onboarding |
| `candidate` | For Candidates | ctoi/page-candidate-careers |
| `apply` | Apply | page-apply template |

### Configuration

- [ ] **Google OAuth**: Add Client ID and Secret in ctoi Settings
- [ ] **Gemini API**: Add API key for resume processing
- [ ] **Action Scheduler**: Install (WooCommerce or standalone) for resume queue
- [ ] **Permalinks**: Flush after activation (Settings → Permalinks → Save)

### SEO

- [ ] **Sitemaps**: Exclude /my-dashboard, /company-dashboard, /login
- [ ] **JobPosting Schema**: Auto-output on single internship
- [ ] **Organization/WebSite Schema**: Auto-output on homepage
- [ ] **FAQ Schema**: Auto-output on FAQ page

### Security

- [ ] Nonces on all forms
- [ ] Capability checks on REST endpoints
- [ ] File upload: PDF/DOC/DOCX/TXT only, 5MB max
- [ ] HTTPS enforced

---

## 17. Future Roadmap (Post-Launch)

| Feature | Description |
|---------|-------------|
| **Advanced Search** | AJAX-powered filtering on internship archive (no page reload) |
| **Application Management** | Employers change status (Pending → Interview → Hired) from dashboard |
| **Email Notifications** | `wp_mail()` on application submission, status changes |
| **Elasticsearch** | Scale candidate search for 10K+ profiles |
