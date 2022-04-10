<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## How to Use This Apps

E-Prescription merupakan sebuah aplikasi berbasis web sederhana yang digunakan untuk melakukan pencatatan resep secara digital. Aplikasi ini dibangun/dibuat dengan menggunakan Framework Laravel 7.x, berikut dibawah merupakan tata cara untuk menggunakan aplikasi ini.

- Buka git bash Anda.
- Silahkan clone aplikasi ini terlebih dahulu dari github dengan menggunakan command berikut di git bash "git clone https://github.com/randycahya99/eprescription.git".
- Setelah itu gunakan command "composer install" pada project E-Prescription yang telah Anda download untuk menginstall seluruh depedensi yang dibutuhkan.
- Set up  file .env (jika ada ekstensi .example maka rename terlebih dahulu menjadi .env saja) pada bagian database menjadi "DB_DATABASE=eprescription".
- Gunakan command "php artisan key:generate" untuk mengatasi error jika APP_KEY pada .env masih kosong.
- Lakukan migrasi database menggunakan command "php artisan migrate", dan jika memiliki seeder bisa menggunakan "php artisan migrate --seed"
- Terakhir silahkan gunakan command "php artisan serve" untuk mengakses aplikasi ini secara local server di device Anda dan buka browser lalu ketik "http://127.0.0.1:8000/" atau bisa juga "http://localhost:8000/".


* DISARANKAN UNTUK MENGIMPOR FILE eprescription.sql KE DATABASE ANDA, DIKARENAKAN ADA 2 TABEL YANG MERUPAKAN DATA MASTER DAN TIDAK BERUPA MIGRATION.
* Untuk meng-copy ISI dari TABEL MASTER DATA (obatalkes_m dan signa_m) ke TABEL MIGRASI ANDA, silahkan gunakan syntax sql berikut: "INSERT INTO `obatalkes` SELECT * FROM `obatalkes_m`" dan juga "INSERT INTO `signa` SELECT * FROM `signa_m`.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
