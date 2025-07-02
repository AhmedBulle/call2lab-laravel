# Call2Lab - Laravel Medical Lab Testing App

Call2Lab is a Laravel-based medical lab test platform where users can:
- Register and login securely
- Book and manage lab test appointments
- Upload and view results
- Contact support via a form

## Features
- User Authentication (Login/Register)
- Dashboard for users
- Admin interface for uploading results
- Contact form (stored in DB)
- Animated frontend using Tailwind CSS
- Dynamic and responsive UI

## Installation
```bash
git clone https://github.com/YOUR_USERNAME/call2lab-laravel.git
cd call2lab-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
