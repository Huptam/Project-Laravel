<p align="center">
    <h1 align="center">Simple CRUD Using Laravel, Jetstream, AdminLTE and DataTables</h1>
</p>

Simple CRUD in Laravel with: login [Jetstream](https://jetstream.laravel.com/), [AdminLTE](https://adminlte.io/) and [DataTables](https://datatables.net/).

## Installation

### Requirements

For system requirements you [Check Laravel Requirement](https://laravel.com/docs/9.x/deployment#server-requirements)

### Clone the repository from github.

    git clone https://github.com/Huptam/Project-Laravel.git [YourDirectoryName]

The command installs the project in a directory named `YourDirectoryName`. You can choose a different
directory name if you want.

### Install dependencies

Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

    cd YourDirectoryName
    composer install

### Config file

Rename or copy `.env.example` file to `.env` 1.`php artisan key:generate` to generate app key.

1. Set your database credentials in your `.env` file
2. Set your `APP_URL` in your `.env` file.

### Database

1. Migrate database table `php artisan migrate`

### Install Node Dependencies

1. `npm install` to install node dependencies
2. `npm run dev` to build our javascript

### Create storage link

`php artisan storage:link`

### Run Server

1. `php artisan serve` or Laravel Homestead
2. Visit `localhost:8000` in your browser. Create an account first and login.

### Screenshots

#### Landing Page

![Lading Page](![Screenshot 'Lading Page'](https://github.com/Huptam/Project-Laravel.git/blob/master/screenshots/lading_page.png?raw=true))

#### Create product

*

#### Products list

*
