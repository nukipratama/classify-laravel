# Classify - Port Terminal Asset Management System

A Laravel-based web application for managing lifting equipment and jetty operations at port terminals. Features intelligent cargo classification and comprehensive inventory management.

## 🚢 Features

### 1. **Jetty Classification System**
- Automatically classifies cargo based on weight, shape, and crane capacity
- Supports 120-Ton and 280-Ton cranes with safety validation
- Handles Square (4 Padeyes) and Square/Cylinder (2 Padeyes) cargo shapes
- Suggests appropriate lifting equipment in real-time

### 2. **Inventory Asset Management**
- Manages 12+ equipment types: Wire Slings, Shackles, Hooks, Master Links, Lashing, Chain Slings, Webbing Slings, Accessories, Steel Plates, Chain Blocks, and CCU units
- Tracks quantities, SWL ratings, dimensions, and expiration dates
- Real-time availability monitoring

### 3. **Open Yard Management**
- Dedicated interface for yard operations
- Integrated with inventory and jetty systems

### 4. **Modern Web Interface**
- Responsive design with Tailwind CSS
- Intuitive navigation and real-time validation

## 🛠 Technology Stack

- **Backend Framework**: Laravel 12.x
- **PHP Version**: 8.2+
- **Frontend**: 
  - Tailwind CSS 4.0
  - Vite 6.x for asset compilation
  - Blade templating engine
- **Database**: SQLite (default), MySQL/PostgreSQL supported
- **Development Environment**: Laravel Sail (Docker)
- **Asset Management**: Vite with hot module replacement

## 📋 System Requirements

### Development Environment
- **PHP**: 8.2 or higher
- **Composer**: Latest version
- **Node.js**: 18.x or higher
- **npm**: 9.x or higher
- **Database**: SQLite (included) or MySQL 8.0+/PostgreSQL 13+

### Production Environment
- **Web Server**: Nginx or Apache
- **PHP**: 8.2 with extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
- **Database**: MySQL 8.0+ or PostgreSQL 13+
- **SSL Certificate**: Recommended for production

## 🚀 Installation & Setup

### Option 1: Standard Installation

#### 1. Clone the Repository
```bash
git clone <repository-url> classify-laravel
cd classify-laravel
```

#### 2. Install PHP Dependencies
```bash
composer install
```

#### 3. Install JavaScript Dependencies
```bash
npm install
```

#### 4. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# The default SQLite configuration works out of the box
# For MySQL, update DB_CONNECTION, DB_DATABASE, DB_USERNAME, DB_PASSWORD in .env
```

#### 5. Database Setup
```bash
# Create SQLite database (default)
touch database/database.sqlite

# Run migrations
php artisan migrate

# Seed the database with sample data
php artisan db:seed
```

#### 6. Build Frontend Assets
```bash
# For development
npm run dev

# For production
npm run build
```

#### 7. Start the Application
```bash
# Development server
php artisan serve

# Application will be available at http://localhost:8000
```

### Option 2: Docker Installation (Recommended for Development)

#### 1. Clone and Setup
```bash
git clone <repository-url> classify-laravel
cd classify-laravel
cp .env.example .env
```

#### 2. Install Dependencies
```bash
composer install
npm install
```

#### 3. Start with Sail
```bash
# Start all services
./vendor/bin/sail up -d

# Generate application key
./vendor/bin/sail artisan key:generate

# Run migrations and seeders
./vendor/bin/sail artisan migrate --seed

# Build assets
./vendor/bin/sail npm run build
```

#### 4. Access Application
- **Application**: http://localhost
- **Database**: SQLite (no additional setup required)

## 📊 Database Structure

### Core Tables
- **inventory_variant**: Equipment specifications and types
- **inventory**: Current stock levels and expiration tracking
- **jetty_map**: Cargo classification rules and equipment mapping

### Key Enums
- **InventoryVariantType**: Equipment categories
- **Shape**: Cargo shape classifications
- **Crane**: Available crane types and capacities

## 🎯 Usage Guide

### Jetty Classification
1. Go to **Jetty** section
2. Enter cargo weight in tons
3. Select cargo shape and crane type
4. Click **Classify** for equipment recommendations

### Inventory Management
1. Visit **Inventory Asset** section
2. Browse equipment by category
3. View stock levels, ratings, and expiration dates

### Navigation
- **Home** → Jetty classification
- **Jetty** → Cargo classification
- **Open Yard** → Yard operations  
- **Inventory Asset** → Equipment inventory

## 🚀 Development Workflow

### Start Development Server
```bash
# Start the application
php artisan serve

# Application will be available at http://localhost:8000
```

### Frontend Development
```bash
# Development with file watching
npm run dev

# Production build
npm run build
```

### Database Management
```bash
# Run migrations
php artisan migrate

# Seed database with sample data
php artisan db:seed

# Reset and reseed database
php artisan migrate:fresh --seed
```

## 🌐 Expose with ngrok

To share your local development server publicly (useful for testing or demonstrations):

### 1. Install ngrok
```bash
# Download from https://ngrok.com/download
# Or install via package manager:

# macOS
brew install ngrok/ngrok/ngrok

# Windows (Chocolatey)
choco install ngrok

# Linux (Snap)
snap install ngrok
```

### 2. Authenticate ngrok (one-time setup)
```bash
# Sign up at https://ngrok.com and get your authtoken
ngrok config add-authtoken YOUR_AUTHTOKEN
```

### 3. Start your Laravel application
```bash
php artisan serve
# Application running at http://localhost:8000
```

### 4. Expose with ngrok (in a new terminal)
```bash
# Expose port 8000 with HTTPS
ngrok http 8000

# Your application will be available at:
# https://random-string.ngrok-free.app
```

### 5. Update Laravel configuration
Add the ngrok URL to your `.env` file:
```env
APP_URL=https://your-ngrok-url.ngrok-free.app
```

**Note**: Free ngrok URLs change each time you restart. For persistent URLs, consider upgrading to a paid plan.

## 🚀 Deployment

### Production Deployment Checklist

1. **Environment Setup**
```bash
# Set production environment
APP_ENV=production
APP_DEBUG=false

# Configure production database
# Set secure APP_KEY
# Configure mail settings if needed
```

2. **Optimization**
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

3. **Asset Compilation**
```bash
npm run build
```

4. **Web Server Configuration**
- Point document root to `public/` directory
- Configure URL rewriting for Laravel
- Set appropriate file permissions

## 📞 Support & Maintenance

### Logs Location
- Application logs: `storage/logs/laravel.log`
- Web server logs: Check your web server configuration

### Common Issues
- **Database Connection**: Verify `.env` database settings
- **File Permissions**: Ensure `storage/` and `bootstrap/cache/` are writable
- **Asset Loading**: Run `npm run build` for production

---

**Classify** - Streamlining port terminal operations with intelligent asset management and cargo classification systems.
