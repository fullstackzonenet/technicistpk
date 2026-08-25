# Technicist (SMC) Pvt Ltd - Web Portal

Technicist (SMC) Pvt Ltd is Pakistan's premier provider of automated boom barriers, RFID E-Tag networks, high-security surveillance integration, Visitor Management Systems, LED stadium illumination, and professional IT architecture.

This portal is built on top of [Winter CMS](https://wintercms.com/) (Laravel-powered content management system) to provide maximum performance, dynamic administration control, and 100% SEO friendliness.

---

## 🚀 Key Features

*   **Custom Hero Video Slider**: Supports HTML5 background playback of `facial_vehicle_entry_exit.mp4` and other high-definition streams with animated overlays.
*   **Fully Dynamic Backend Customization**: Controlled completely via `theme.yaml` tabs (Company Info, Hero Slider, Vision & Mission, SEO) enabling non-technical staff to change cellular lines, email, address, and metadata tags effortlessly from the CMS administrator panel.
*   **100% SEO-Friendly Architecture**: Features customized dynamic headers supporting canonical link resolution, dynamic OpenGraph properties, meta description fields, and search-engine indexation directives on all templates.
*   **Responsive Multi-Pages**: Structured layouts covering:
    *   **Home**: Key corporate facts, value propositions, and trust matrices.
    *   **About**: Management values, historical background, and CEO Syed Abul Hassan's vision.
    *   **Services**: Details of boom barrier systems, E-Tags, Visitor tracker apps, and IT infrastructure.
    *   **Projects**: Highlighted success stories and contracts (CDA, DHA, PAF, Suzuki, NHA).
    *   **Contact**: Lead capture and inquiry forms.

---

## 🛠️ Tech Stack & Environment

*   **PHP version requirement**: PHP 8.2
*   **CMS Core**: WinterCMS (on top of Laravel & Symfony components)
*   **Local Database**: SQLite (`storage/database.sqlite`) for ultra-lightweight rapid development.
*   **Production Database**: MySQL support integrated with ready-to-use sample configs.
*   **Frontend**: Bootstrap 5, FontAwesome, jQuery, Waypoints, Owl Carousel, WOW Animation.

---

## 🔧 Installation & Deployment

### 1. Prerequisites
Ensure you have Homebrew and PHP 8.2 installed on your development environment:
```shell
# For macOS with homebrew:
brew install php@8.2
```

### 2. Environment Setup
Duplicate `.env.example` to create your local `.env`:
```shell
cp .env.example .env
```
*   For **local SQLite development**: Maintain the connection string `DB_CONNECTION="sqlite"`.
*   For **production MySQL deployment**: Adjust connection strings to `mysql` using details outlined in `.env.sample`.

### 3. Composer Installation
Restore all standard dependencies:
```shell
composer install
```

### 4. Database Setup & Upgrades
Apply migrations and set up standard schemas:
```shell
php artisan winter:up
```

### 5. Mirror Public Assets
Run the mirror command so your local webserver exposes all assets cleanly:
```shell
php artisan winter:mirror public --relative
```

---

## 📂 Project Structure

```
├── config/                 # Application configuration (DB, CMS, app rules)
├── souce_html/             # Original HTML mockup templates & profile PDFs (Git Ignored)
├── themes/
│   └── technicistpk/       # TechnicistPK Theme Directory
│       ├── assets/         # CSS, JS, Libraries, & HD videos (facial_vehicle_entry_exit.mp4)
│       ├── layouts/        # Default master layout (SEO & OpenGraph elements)
│       ├── pages/          # Home, About, Services, Projects, and Contact pages
│       ├── partials/       # Header, Footer, and Video Slider layouts
│       └── theme.yaml      # Master backend dynamic customizer blueprint
└── public/                 # Exposed public web directory (Mirrored)
```

---

## 📞 Support & Contacts

*   **CEO**: Syed Abul Hassan
*   **Address**: Office #12, 1st Floor, VIP Plaza, I-8 Markaz, Islamabad, Pakistan
*   **Cell**: +92-312-5721105
*   **Landline**: 051-2223120
*   **Email**: Technicist.isb@gmail.com
