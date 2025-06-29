# Laravel Ahmedabad - Installation Guide

## Requirements

- PHP >= 8.1
- Composer
- Node.js >= 16.x & npm
- MySQL or other supported database

## Installation Steps

1. **Clone the repository**
    ```
    git clone <repository-url>
    cd laravel-ahmedabad
    ```

2. **Install PHP dependencies**
    ```
    composer install
    ```

3. **Copy `.env` file and generate application key**
    ```
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure your `.env` file**
    - Set your database credentials and other environment variables as needed.

5. **Run database migrations**
    ```
    php artisan migrate
    ```

6. **Install Node.js dependencies**
    ```
    npm install
    ```

7. **Build frontend assets**
    - For development:
      ```
      npm run dev
      ```
    - For production:
      ```
      npm run build
      ```

8. **Start the local development server**
    ```
    php artisan serve
    ```

Enjoy your Laravel Ahmedabad application!
