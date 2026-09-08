Library System
Description

Simple Library Information System built using Laravel and MySQL.

This system is designed to help manage library data, including books, members, and borrowing activities.

Requirements

Before installing this project, make sure you have installed:

PHP
Composer
MySQL
Laravel
Git
Installation
1. Clone the Repository
git clone <repository-url>
cd library-system

2. Install Dependencies

Install PHP dependencies using Composer:

composer install

3. Environment Configuration

Copy the .env.example file to .env:

cp .env.example .env


For Windows, you can use:

copy .env.example .env


Then configure your database in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=

4. Create the Database

Create a MySQL database named:

library_system


You can create it using MySQL:

CREATE DATABASE library_system;

5. Generate Application Key

Run:

php artisan key:generate

6. Run Database Migration

Run the migration:

php artisan migrate


If the project includes seeders, run:

php artisan db:seed


Or run migration and seeder together:

php artisan migrate --seed

7. Start the Development Server

Run:

php artisan serve


The application will be available at:

http://127.0.0.1:8000

Usage

After starting the application, open the URL in your browser:

http://127.0.0.1:8000


You can then use the system to manage library information according to the features provided by the application.

Project Structure

The main Laravel directories include:

library-system/
├── app/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .env
├── composer.json
└── README.md

Database

This project uses MySQL as its database management system.

Make sure the MySQL server is running before starting the Laravel application.

Author

Nasywa Salsabila

© 2026 Library System