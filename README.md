MarketFlow - Modern Laravel Marketplace
🚀 MarketFlow
MarketFlow is a modern e-commerce marketplace platform developed with the Laravel framework, featuring a robust MySQL database backend and a responsive Bootstrap frontend. It provides a seamless bridge between sellers and buyers, offering an intuitive interface for product discovery and management.

✨ Key Features
👤 User Experience
Dynamic Product Catalog - Browse products with beautiful grid layouts
Smart Search & Filtering - Find products by title, seller, or category
Seller Profiles - Dedicated seller pages with product portfolios
Shopping Cart System - Add, remove, and manage items before checkout

👑 Admin Dashboard
Product Management - Create, read, update, and delete product listings
Image Upload System - Seamless product photo uploads with storage integration
Category Management - Organize products under relevant categories
Rating System - 5-star rating functionality for products

🛠️ Technical Architecture
text
┌─────────────────────────────────────────────┐
│           Laravel 12.61.1 Backend           │
├─────────────────────────────────────────────┤
│  • MVC Architecture                         │
│  • Multiple Controllers (BasicController)   │
│  • Eloquent ORM for Database Operations     │
│  • Blade Templating Engine                  │
│  • MySQL Database Integration               │
│  • File Storage System                      │
│  • RESTful Routing                          │
└─────────────────────────────────────────────┘
📊 Database Structure
The MySQL database powers the application with:
Products Table - Store product details (title, price, description, rating)
Sellers Table - Manage seller information and profiles
Categories Table - Organize products by categories
Cart Table - Track user shopping cart items
Images Storage - Efficient file management system

🎯 Core Controllers
BasicController.php
The heart of the application handling:
home() - Display marketplace homepage with all products
submit() - Process new product submissions with validation
cart() - Manage shopping cart operations
account() - User account management

home_admin() - Admin panel for product management

💻 Technology Stack
Layer	Technology
Backend Framework	Laravel 12.61.1
Frontend	Bootstrap 5 + Blade Templates
Database	MySQL
PHP Version	PHP 8.2.12
Styling	Custom CSS + Bootstrap Icons
File Storage	Laravel Storage (local/public)
Version Control	Git & GitHub

🎨 UI/UX Highlights
Responsive Design - Fully functional on desktop, tablet, and mobile devices
Modern Aesthetics - Clean, minimal interface with smooth animations
Product Cards - Beautiful grid layout with hover effects
Admin Panel - Dedicated interface for product management
Intuitive Navigation - Easy access to all marketplace sections

📦 Key Features in Detail
Product Management
php
// Example Controller Method
public function submit(Request $request) {
    $message = new Message();
    $message->title = $request->title;
    $message->price = $request->price;
    $message->seller = $request->seller;
    $message->save();
}
Image Upload System
Support for JPG, PNG, GIF formats
Automatic file storage in /storage/app/public
Image preview before upload
Maximum file size validation (2MB)
Search Functionality
Real-time product search
Filter by seller name
Category-based browsing
Price range filtering

🚀 Getting Started
bash
# Clone the repository
git clone https://github.com/LuisVertx/laravel.git

# Install dependencies
composer install

# Configure environment
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Create storage link for images
php artisan storage:link

# Start development server
php artisan serve


P.S. to use the admin panel, enter /home_admin in the website address
