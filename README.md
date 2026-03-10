# Your CPA Expert - Professional Legal & Tax Advisory Portal

A world-class Laravel portal designed for CPA and Law firms. This application combines robust digital functionality with a "deceptively simple" user experience, optimized for high-net-worth clients and small business owners.

## 🚀 Key Features

- **Dynamic Page Builder**: Create modular pages using custom blocks (Hero, Text, CTA, Team).
- **Client Acquisition Funnel**: Interactive "I need help with..." wizard to capture high-quality leads.
- **Resource Hub**: Full-featured blog and article center for tax and legal insights.
- **Admin Dashboard**: Centralized management for leads, team profiles, and site content.
- **Mandatory 2FA**: Mandatory Two-Factor Authentication for all administrative accounts for maximum security.
- **Global Branding System**: Instantly update firm colors, logos, and typography via the Admin Panel.

## 🛠️ Technology Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Vanilla CSS (Premium Design System), Vanilla JavaScript (Wizard Logic)
- **Database**: SQLite (Local Dev) / MySQL (Production/Hostinger)
- **Security**: 2FA Middleware, CSRF Protection, Encrypted Lead Storage.

## 📦 Installation & Setup

### 1. Requirements
Ensure your server (Hostinger or similar) has:
- PHP 8.2 or higher
- MySQL or MariaDB
- Composer

### 2. Fast Installation (Web-Based)
For a "smart" and automated setup, simply navigate to:
`https://yourcpaexpert.com/setup`
This tool will verify your environment, run all necessary migrations, and create your first **Super Admin** account.

## 🚢 Deployment to Hostinger (GitHub)

### Step 1: Push to GitHub
I have provided a `push.ps1` script in the root directory to automate this.
1. Open PowerShell in your project folder.
2. Run: `.\push.ps1`
3. Enter your commit message. This will sync everything to `ffcu-pinellas/yourcpaexpert.com.git`.

### Step 2: Connect Hostinger to GitHub
1. Log into your **Hostinger hPanel**.
2. Navigate to **Advanced > Git**.
3. Under "Connect a New Repository", paste: `https://github.com/ffcu-pinellas/yourcpaexpert.com.git`
4. Set the branch to `main` and the directory to `public_html`.
5. Click **Create**.

### Step 3: Configure Environment
1. In hPanel, go to **Files > File Manager**.
2. Create or edit the `.env` file in your root directory.
3. **CRITICAL**: Set `SESSION_DRIVER=file` and `CACHE_STORE=file` for the initial setup.
4. Set your **MySQL** credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_DATABASE=u123_cpadb
   DB_USERNAME=u123_cpauser
   DB_PASSWORD=your_secure_password
   ```
4. Set `APP_URL=https://yourcpaexpert.com` and `APP_ENV=production`.

### Step 4: Finalize & SSL
1. Run the web-based installer at `https://yourcpaexpert.com/setup`.
2. Ensure your SSL is active (Hostinger includes this for free).
3. If images don't show, run `php artisan storage:link` via the Hostinger SSH or File Manager.

### 3. Local Setup (CLI)

### 3. Hostinger (MySQL) Configuration
To use MySQL on Hostinger, update your `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=u123456789_cpa_db
DB_USERNAME=u123456789_cpa_user
DB_PASSWORD=your_secure_password
```
*Note: Create the database and user in your Hostinger hPanel before updating these values.*

## 🔒 Security First
All admin routes are protected by the `app.admin_2fa` middleware. Upon first login, admins are required to scan a QR code with an authenticator app (Google Authenticator, Authy, etc.) to enable 2FA.

## 🎨 Design Philosophy
The UI uses a curated professional palette:
- **Primary Navy**: `#0d47a1` (Trust & Authority)
- **Accent Orange**: `#f57c00` (Approachability & Action)
- **Typography**: Inter (Body) and Outfit (Headings) for a premium, modern feel.

## 📄 License
Custom Proprietary - Built for Your CPA Expert.
