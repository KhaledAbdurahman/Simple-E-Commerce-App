# 🛒 Laravel Simple E-Commerce App

A simple E-Commerce web application built with **Laravel** that allows users to:

- Register & log in
- View a list of products
- Create, update, and delete products (CRUD operations)
- Secure product management with authentication

---

## 🚀 Features

✅ User Authentication (Login/Register)  
✅ Product Listing Page  
✅ Create New Products  
✅ Edit Existing Products  
✅ Delete Products  
✅ Blade Templating  
✅ Validation and Flash Messages  

---

## 🧰 Tech Stack

- **Laravel 12**
- **MySQL** or SQLite
- **Blade** (Laravel's templating engine)
- **Bootstrap 5** (optional for UI)

---

## 📦 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/laravel-ecommerce.git
   cd laravel-ecommerce
## Install dependencies
```
composer install
npm install && npm run dev  # Optional, if using Laravel Mix for assets
```

## Set up environment
```
bash
cp .env.example .env
php artisan key:generate
```

## Set up the database

Configure your .env with DB credentials.

Then run:
```
bash
php artisan migrate
```

## Seed dummy users/products (optional)
```
bash
php artisan db:seed
```

## Start the development server
```
bash
php artisan serve
```

## 🔐 Authentication
Laravel Breeze or Laravel UI is used for user authentication.

To install Breeze (if not yet installed):
```
bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```

## 📁 Folder Structure
- app/Models/Product.php – Product Model

- app/Http/Controllers/ProductController.php – Controller for CRUD

- routes/web.php – Routes

- resources/views/ – Blade views for product pages and auth

