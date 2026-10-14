# Technicist (SMC) Pvt Ltd - Web Portal

Technicist (SMC) Pvt Ltd is Pakistan's premier provider of automated boom barriers, RFID E-Tag networks, high-security surveillance integration, Visitor Management Systems, LED stadium illumination, and professional IT architecture.

This portal is built on top of [Winter CMS](https://wintercms.com/) (Laravel-powered content management system) to provide maximum performance, dynamic administration control, and 100% SEO friendliness.

---

## 📋 System Requirements

For full system requirements, server configurations, PHP extensions, and database setup, please see [REQUIREMENTS.md](file:///home/eman/dev_projects/technicistpk/REQUIREMENTS.md).

* **PHP Version**: `PHP >= 8.1` (Recommended: `PHP 8.2` or `PHP 8.3`)
* **CMS Core**: WinterCMS (Laravel & Symfony components)
* **Database**: SQLite (`storage/database.sqlite`) or MySQL
* **Web Server**: Apache / LiteSpeed (Hostinger) with `mod_rewrite` enabled
* **Active Theme**: `themes/securex`

---

## 🚀 Key Features

* **Dynamic Corporate Pages**:
  * **Home**: Key corporate facts, value propositions, and trust matrices.
  * **About**: Management values, historical background, and company vision.
  * **Services**: Boom barrier systems, E-Tags, Visitor tracker apps, IT infrastructure, Elect/Mech Engineering, and Road Safety.
  * **Products**: Smart City, AI, Resident E-Services.
  * **Projects**: Highlighted success stories and contracts (CDA, DHA, PAF, Suzuki, NHA).
  * **Blog**: IT Automation, ERP, and E-Tag Security articles.
  * **Contact**: Google Map embed and automated lead forms.
* **100% SEO-Friendly Architecture**: Customized dynamic headers supporting canonical link resolution, dynamic OpenGraph properties, meta description fields, and search-engine indexation directives.
* **Responsive Layout**: Built with Bootstrap 5, jQuery, Waypoints, Owl Carousel, and WOW Animation.

---

## 🔧 Quick Setup & Deployment

1. **Clone Repository**:
   ```bash
   git clone git@github.com:fullstackzonenet/technicistpk.git
   cd technicistpk
   ```

2. **Setup Environment**:
   ```bash
   cp .env.example .env
   ```

3. **Install Dependencies**:
   ```bash
   composer install --no-dev --optimize-autoloader
   ```

4. **Run Migrations & Clear Cache**:
   ```bash
   php artisan winter:up
   php artisan cache:clear
   ```

---

## 📂 Project Structure

```
├── config/                 # Application configuration (DB, CMS, app rules)
├── plugins/
│   ├── technicist/         # Technicist Custom Plugins
│   └── winter/pages/       # Winter Pages Plugin
├── themes/
│   └── securex/            # Active Securex Theme Directory
│       ├── assets/         # CSS, JS, Libraries, SCSS & Images
│       ├── layouts/        # Default master layout (SEO & OpenGraph elements)
│       ├── pages/          # Home, About, Services, Products, Projects, Contact
│       └── theme.yaml      # Master backend customizer blueprint
├── storage/
│   └── database.sqlite     # SQLite Database File
└── public_html/            # Web root folder for Hostinger deployment
```

---

## 📞 Contact Information

* **Address**: Office #12, 1st Floor, VIP Plaza, I-8 Markaz, Islamabad, Pakistan
* **Cell / WhatsApp**: +92-312-5721105
* **Landline**: 051-2223120
* **Email**: Technicist.isb@gmail.com / info@technicistpk.com
