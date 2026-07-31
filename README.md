# UTSL Technology - EdTech Solutions Platform

<div align="center">
  <img src="assets/img/logo.png" alt="UTSL Logo" width="120" />
  <h2>The Technology Behind Better Learning</h2>
  <p>An advanced, fully-responsive corporate portal and EdTech service demonstration platform.</p>
  
  ![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)
  ![PostgreSQL](https://img.shields.io/badge/PostgreSQL-12+-336791?style=for-the-badge&logo=postgresql&logoColor=white)
  ![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
  ![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
</div>

---

## 📑 Table of Contents
1. [Overview](#-overview)
2. [Key Features & Services](#-key-features--services)
3. [Architecture & Tech Stack](#-architecture--tech-stack)
4. [Comprehensive Directory Structure](#-comprehensive-directory-structure)
5. [Database Schema Deep Dive](#-database-schema-deep-dive)
6. [Complete Installation Guide](#-complete-installation-guide)
   - [Prerequisites](#prerequisites)
   - [Local Environment Setup (XAMPP / Standalone)](#local-environment-setup-xampp--standalone)
   - [Database Initialization](#database-initialization)
7. [Environment & Security (`.env`)](#-environment--security-env)
8. [Troubleshooting Guide](#-troubleshooting-guide)
9. [Development & Contribution](#-development--contribution)
10. [License](#-license)

---

## 📖 Overview
**UTSL Technology** is an innovative EdTech (Educational Technology) platform focused on delivering next-generation digital solutions for the education sector. 

This repository houses the source code for our primary web application. It acts as both our public-facing corporate website and a robust demonstration of our technical capabilities. Built from the ground up with **Vanilla PHP** and a **PostgreSQL** database, it prioritizes maximum performance, security, and a beautiful, highly-interactive frontend powered by **Tailwind CSS**.

---

## ✨ Key Features & Services

The platform is divided into distinct, meticulously designed service portfolios that showcase our offerings:

### 💼 Core Services
- **LMS Development (`lms-dev.php`)**: Custom Learning Management System architectures and integrations.
- **AI Learning Tools (`ai-tools.php`)**: Showcasing artificial intelligence integration for personalized student learning.
- **Mobile Apps (`mobile-apps.php`)**: Educational app development for iOS and Android ecosystems.
- **System Integrations (`integrations.php`)**: Connecting disjointed educational software (SIS, CRM, ERP).
- **LMS Analytics (`analytics.php`)**: Advanced data dashboards for tracking student performance and engagement.
- **CTO Services (`cto-services.php`) & Growth (`growth.php`)**: Strategic consulting for scaling EdTech startups.

### ⚙️ Application Features
- **Dynamic Content Engine**: Integrated blog and case study system pulling directly from the PostgreSQL database (`articles.php`, `article-detail.php`).
- **User Authentication**: Secure user registration, login, and robust session management using PHP sessions and `password_hash()` encryption.
- **Lead Capture System**: The `contact-us.php` form automatically writes potential client data into the CRM database.
- **Glassmorphic UI & Micro-animations**: Premium visual aesthetics designed to captivate users using Tailwind CSS utilities, Phosphor Icons, and the Plus Jakarta Sans typeface.

---

## 🏗 Architecture & Tech Stack

The application employs a **Component-based PHP Architecture** to maintain DRY (Don't Repeat Yourself) principles without the overhead of heavy frameworks.

*   **Frontend Tier**: HTML5, Vanilla JavaScript (ES6+), Tailwind CSS (via Play CDN).
*   **Application Tier**: PHP 8+ handling routing, templating (via `header.php`/`footer.php` inclusion), and server-side logic.
*   **Data Tier**: PostgreSQL securely accessed via PHP Data Objects (PDO) for SQL injection prevention and fast prepared statements.

---

## 📁 Comprehensive Directory Structure

```text
UTSLTech/
├── .env                        # Environment configurations (Credentials). NOT committed to Git.
├── .gitignore                  # Prevents sensitive files (.env, uploads, logs) from being tracked.
│
├── 📂 assets/                  # Static web resources
│   ├── 📂 css/                 # Custom global stylesheets (`style.css`)
│   └── 📂 img/                 # Logos, background vectors, and UI illustrations
│
├── ⚙️ Configuration & Setup
│   ├── db.php                  # Database connection logic (PDO instantiation)
│   ├── schema.sql              # Raw SQL commands for creating tables and constraints
│   ├── setup-db.php            # One-click execution script to build DB and seed dummy data
│   ├── articles-data.php       # JSON/Array of initial blog data for the seeder
│   ├── fix-xampp.php           # Utility script for XAMPP debugging
│   └── fix-php-ini.php         # Utility script for verifying PHP extensions
│
├── 📄 Core Components
│   ├── header.php              # Global navigation, HTML <head>, and Tailwind config injected here
│   └── footer.php              # Global footer and closing tags
│
├── 👤 Authentication
│   ├── login.php               # Login interface and session creation
│   ├── signup.php              # Registration and password hashing
│   └── logout.php              # Session destruction
│
└── 🌐 Pages
    ├── index.php               # Main landing page
    ├── articles.php            # Dynamic blog feed
    ├── article-detail.php      # Dynamic single article view
    ├── contact-us.php          # Contact form / lead generation
    └── about.php, services.php, careers.php, portfolio.php # Informational pages
```

---

## 🗄️ Database Schema Deep Dive

The application runs on three primary PostgreSQL tables instantiated by `schema.sql`:

1. **`users`**
   - Handles administrative and client accounts.
   - Fields: `id` (Serial PK), `name`, `email` (Unique), `password_hash` (Bcrypt), `created_at`.

2. **`articles`**
   - Manages all dynamic content, news, and case studies.
   - Fields: `id` (String PK), `title`, `summary`, `content`, `author`, `date`, `category`.
   - UI Fields: `category_bg`, `category_text` (Allows the database to dictate the Tailwind CSS colors rendered on the frontend for specific categories).

3. **`contact_submissions`**
   - The lead-generation repository for the contact form.
   - Fields: `id`, `name`, `email`, `phone`, `job_title`, `company`, `message`, `interest` (e.g., 'LMS Dev', 'AI Tools'), `submitted_at`.

---

## ⚙️ Complete Installation Guide

### Prerequisites
- **PHP** (8.0 or higher recommended)
- **PostgreSQL** (12.0 or higher)
- **Git**
- Optional but recommended: A local server environment like XAMPP, WAMP, or MAMP.

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/UTSLTech.git
cd UTSLTech
```

### Step 2: Configure Environment Variables
1. Ensure your `.gitignore` correctly ignores the `.env` file.
2. The `db.php` file handles connections. Ensure it matches your local PostgreSQL setup. By default, the app expects:
   - **Host**: `localhost`
   - **Port**: `5432`
   - **DB Name**: `utsl_edtech`
   - **User**: `postgres`
   - **Password**: `student`

*(Note: If utilizing a `.env` file in production, you will need to parse it using a library like `vlucas/phpdotenv` inside `db.php`)*.

### Step 3: Create the PostgreSQL Database
Open your PostgreSQL terminal (`psql`) or a GUI (pgAdmin/DBeaver) and execute:
```sql
CREATE DATABASE utsl_edtech;
```

### Step 4: Verify PHP PDO PostgreSQL Extension
If you are using **XAMPP/WAMP**:
1. Open your `php.ini` file.
2. Search for `;extension=pdo_pgsql` and `;extension=pgsql`.
3. Remove the semicolon (`;`) at the beginning to uncomment them.
4. Restart your Apache server.
*(You can run the included `phpinfo.php` or `fix-php-ini.php` scripts via the browser to verify the extension is active).*

### Step 5: Database Initialization and Seeding
We have provided an automated setup script to instantly scaffold your database.
1. Start your local server. If using PHP's built-in server, run:
   ```bash
   php -S localhost:8000
   ```
2. Open your browser and navigate to: `http://localhost:8000/setup-db.php`
3. This script will:
   - Execute `schema.sql` (creating all tables).
   - Seed the database with high-quality dummy articles from `articles-data.php`.
   - Generate a default admin account (**Email:** `admin@utsltech.com` | **Password:** `admin123`).

### Step 6: Launch
Navigate to `http://localhost:8000/index.php` and explore the fully functional application!

---

## 🔒 Environment & Security (`.env`)
Security is a top priority.
- **Database Credentials**: Never hardcode production database credentials in `db.php`. Ensure production servers read from system environment variables or an uncommitted `.env` file.
- **SQL Injection**: All database queries utilize **PDO Prepared Statements**. Do not alter database logic to use raw string concatenation.
- **Session Hijacking**: Session IDs are regenerated upon login. 
- **Git Ignored Files**: The `.gitignore` is configured to prevent `.env`, `.log`, and `/uploads/` from being exposed to the public repository.

---

## 🛠️ Troubleshooting Guide

| Issue | Cause | Solution |
| :--- | :--- | :--- |
| **"Database connection failed: could not find driver"** | PHP `pdo_pgsql` extension is not enabled. | Edit `php.ini`, uncomment `extension=pdo_pgsql`, restart Apache/PHP server. |
| **"SQLSTATE[08006] [7] FATAL: password authentication failed"** | Incorrect DB password in `db.php`. | Check your PostgreSQL password. By default, the app tries the password `student`. Update `db.php` accordingly. |
| **Tailwind CSS classes not applying** | Internet disconnected. | The current setup relies on the Tailwind Play CDN. Ensure you have an active internet connection to load the CSS pipeline. |

---

## 💻 Development & Contribution

We adhere to a strict Component-Based UI pattern even within Vanilla PHP. 

**Creating a new page:**
1. Create `new-page.php`.
2. Include the global header at the top: `<?php $page_title = 'My Page'; include 'header.php'; ?>`
3. Write your HTML/Tailwind content.
4. Include the global footer at the bottom: `<?php include 'footer.php'; ?>`

**Contribution Workflow:**
1. Fork the project repository.
2. Create your Feature Branch: `git checkout -b feature/NewAwesomeFeature`
3. Commit your Changes: `git commit -m 'Added NewAwesomeFeature'`
4. Push to the Branch: `git push origin feature/NewAwesomeFeature`
5. Open a Pull Request for code review.

---

## 📄 License
This project is proprietary and confidential. For licensing details, please contact the repository owner. 

---
<div align="center">
  <i>Crafted with precision by the UTSL Technology Development Team.</i>
</div>
