# Requirements & Technical Specifications

## Technicist (SMC) Pvt Ltd - Web Portal

This document outlines the system, server, and software requirements to run, deploy, and maintain the Technicist PK Web Portal.

---

## 💻 1. System & Server Requirements

### PHP Environment
* **PHP Version**: `PHP >= 8.1` (Recommended: `PHP 8.2` or `PHP 8.3`)
* **PHP Extensions Required**:
  * `pdo` & `pdo_sqlite` (for SQLite) OR `pdo_mysql` (for MySQL/MariaDB)
  * `openssl`
  * `mbstring`
  * `tokenizer`
  * `xml`
  * `ctype`
  * `json`
  * `curl`
  * `fileinfo`
  * `gd` or `imagemagick` (for image processing)
  * `zip`

### Memory & Execution Limits
* **Memory Limit**: Minimum `128M` (Recommended `256M` or higher)
* **Max Execution Time**: Minimum `60` seconds
* **Upload Max Filesize**: Minimum `20M`

---

## 🗄️ 2. Database Options

* **Option A: SQLite (Default / Recommended for Zero-Config)**
  * File location: `storage/database.sqlite`
  * Requires `pdo_sqlite` extension enabled in PHP.
* **Option B: MySQL / MariaDB**
  * Recommended for large production environments with heavy concurrent traffic.
  * Supported versions: MySQL 5.7+, MySQL 8.0+, MariaDB 10.3+.

---

## 🌐 3. Web Server & Hosting Requirements

* **Supported Servers**: Apache 2.4+, Nginx, or OpenLiteSpeed (Hostinger)
* **Apache / LiteSpeed Directives**:
  * `mod_rewrite` enabled
  * `AllowOverride All` enabled
  * `.htaccess` support enabled
  * `DirectoryIndex index.php`
* **File & Directory Permissions**:
  * Folders: `755` (`drwxr-xr-x`)
  * Files: `644` (`-rw-r--r--`)
  * Writable paths: `storage/`, `bootstrap/cache/`, `uploads/`

---

## 🛠️ 4. Quick Installation & Setup

1. **Clone Repository**:
   ```bash
   git clone git@github.com:fullstackzonenet/technicistpk.git
   cd technicistpk
   ```

2. **Environment Configuration**:
   ```bash
   cp .env.example .env
   ```
   Ensure `.env` contains:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://technicistpk.com
   DB_CONNECTION=sqlite
   DB_DATABASE=storage/database.sqlite
   ```

3. **Install Dependencies**:
   ```bash
   composer install --no-dev --optimize-autoloader
   ```

4. **Database Migrations & Cache Clear**:
   ```bash
   php artisan winter:up
   php artisan cache:clear
   ```

---

## 📂 5. Active Active Theme Structure

* **Active Theme**: `themes/securex`
* **Theme Path**: `themes/securex/`
  * `layouts/default.htm` -> Master layout template
  * `pages/` -> Homepage, About Us, Services, Products, Projects, Contact, Blog
  * `assets/` -> CSS, JS, Fonts, Images, and SCSS source files
