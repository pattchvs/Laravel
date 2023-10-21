# Laravel Studies
This repository contains simple CRUD projects built using PHP Laravel.

The first project called HDC Events I made following [Matheus Battisti's](https://youtu.be/qH7rsZBENJo?si=0cJC6MSTXCzBpYny) Laravel classes on Youtube.

The second is a project made by myself called Ducky Music is a simple Laravel application that allows you to CRUD and listen to a song.
## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Database](#database)

## Installation

1. Clone the repository:

```bash
git clone https://github.com/pattchvs/laravel.git
```
2. Select one of the projects avaliable at the folder and open it on terminal


3. Install [PHP and MySQL](https://www.apachefriends.org/pt_br/download.html)


4. Install [Composer](https://getcomposer.org/download/)

5. Start MySQL

6. Install all project's dependencies
```bash
composer install
```

7. Update the .env file and generate an app key
```bash
php artisan key:generate
```


8. Run migrations
```bash
php artisan migrate
```

9. Start the development server
```bash
php artisan serve
```

## Usage

1. Start the application following the steps of [instalation](#installation)
2. The app will be accessible at http://localhost:8000


## Database
The project utilizes MySQL as the database. The necessary database migrations are managed using Laravel.

To [install MySQL](https://www.apachefriends.org/pt_br/download.html) you can install here.

## Disclaimer

This repository includes images and other media that have been sourced from the internet. I do not claim ownership of any of these images, and they are used solely for educational and demonstration purposes within this project. All credit for the creation and ownership of these images goes to their respective creators and copyright holders. If you are the owner of any of the content used and wish to have it removed or credited differently, please contact me, and I will promptly address your concerns.
