<h1 align="center"> ĐỒ ÁN PHÁT TRIỂN HỆ THỐNG WEB - CT299</h1>

<p align="center">
    <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-html-css-php-mysql-logo-png-transparent-14.png"height="80" width="250" alt="Laravel Logo">
    <img src="https://cdn.sussmanconsultants.com/wp-content/uploads/2018/09/logo-laravel.png" height="100" width="250" alt="Laravel Logo">
</p>

<h4>Các ngôn ngữ được sữ dụng</h4>
<ul>
    <li>PHP</li>
    <li>HTMl</li>
    <li>CSS</li>
    <li>Javascript</li>
    <li>MySql</li>
</ul>
<h4>Các công nghệ được sữ dụng</h4>
<ul>
    <li>Laravel</li>
    <li>Jquery</li>
    <li>Tailwind Css</li>
    <li>Laravel Breeze</li>
    <li>lordicon</li>   
    <li>Github</li>   
</ul>
<h4>Lịch cập nhật các chức năng </h4>


|  Stt  | Chức năng                                                                                                              | Ngày cập nhật                                                                       |
| :-: | ---------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| 01  | [register](https://github.com/toanvippro/boookstore_laravel/commit/759bcf2071a9cda0de5cbee092cec11264a2af5d)                               | 27/09/2022          |
| 02  | [login](https://github.com/toanvippro/boookstore_laravel/commit/e011498746c10e15a55c37cfe41d96916a543c9a)                              | 25/09/2022               |
| 03  | fix-bug-account                              | 28/09/2022            |
| 04  | [Home user](https://github.com/toanvippro/boookstore_laravel/commit/aae6fbf3f1a13d6446f26cf6d71a2abaaa9b6362)                               | 02/10/2022         |
| 05  | [Profile user](https://github.com/toanvippro/boookstore_laravel/commit/c98dba810713b68db9f86117b5d0949a7cbeaaaf)                             | 03/10/2022            |
| 06  | [Admin home page](https://github.com/toanvippro/boookstore_laravel/commit/ee4dd5ff41dbd4c104a761434cd831bcd7ac4fa9)                            | 05/10/2022            |
| 07  | [Database Account](https://github.com/toanvippro/boookstore_laravel/commit/297888744c90609da87502d2239ca1994c42b9bc)                          | 18/10/2022            |
| 08  | [Admin login](https://github.com/toanvippro/boookstore_laravel/commit/1121d8fe09a56a4ddfc474ed1d11889259ee8151)                           | 19/10/2022            |
| 09  | [Admin model](https://github.com/toanvippro/boookstore_laravel/commit/b7719365af175ba5e3f0986b698363f6a320804a)                           |20/10/2022            |
| 10  | [Admin select product](https://github.com/toanvippro/boookstore_laravel/commit/1e57b13e6a9ec5c43c6357d346461bcda6eb8cb1)                         |20/10/2022            |
| 11  | [Admin select catetorys](https://github.com/toanvippro/boookstore_laravel/commit/ea866c87439c55dc501624325f7f8431b3af502d)                         |21/10/2022            |
| 12  | [Select slider](https://github.com/toanvippro/boookstore_laravel/commit/a911ccca58cc4bf634c9f769ff99289899f67187)                       |22/10/2022            |
| 13  | [Profile admin](https://github.com/toanvippro/boookstore_laravel/commit/1d68ce6fc7e4efdc700f139b9fe8d362c060c34b)                   |22/10/2022            |
| 14  | [Ckediter](https://github.com/toanvippro/boookstore_laravel/commit/aadaad070737c8d522a3e4134cbfc163ae1b321d)                   |22/10/2022            
| 15  | [ProductController](https://github.com/toanvippro/boookstore_laravel/commit/241c43f4bdeffea702ea01e81b38ae0f4c88fc9f)                   |23/10/2022            |
| 16  | [Fix bug database](https://github.com/toanvippro/boookstore_laravel/commit/5683b344c689ebf6bb29d8bab3f4900c20386355)               |24/10/2022            |
| 17  | [Database](https://github.com/toanvippro/boookstore_laravel/commit/b66b585832a2dd99ccd5f56d39e80cd6f9ce9e83)               |24/10/2022            |
| 18  | [CURD Admin](https://github.com/toanvippro/boookstore_laravel/commit/cea25a901e8dfe02d2d01506490d559ac9cf5975)               |29/10/2022            |
* * *
### Database
- php artisan migrate:refresh
* * *
### Laravel Breeze
- composer require laravel/breeze --dev
- php artisan breeze:install
- php artisan migrate
- npm install
- npm run dev
* * *
### Tailwind Css
- npm run dev
* * *
### Artisan list 
- php artisan down  => dừng chương trình để upload phiên bản mới
- php artisan up => chạy lại chương trình
- php artisan make:controller PhotoController --resource
* * *
### Routing (30/09/2022)
    - route web 
        - Router::get($path, $callback)
        - Router::post($path, $callback)
        - Router::put($path, $callback)
        - Router::patch($path, $callback)
        - Router::delete($path, $callback)
        - Router::options($path, $callback)
        - Router::match($methods, $path, $callback) => nhận request với nhiều phương thức được khai báo trong $methods
        - Router::redirect($path, $redirectTo,$status) => nhận request sau đó chuyển hướng tới $redirectTo
        - Router::view($path,$viewName ,$data) => nhận vào request sau đó render view
        - Router::prefix('path_prefix)->group($callback) => nhóm các route với prefix xác định => thường dùng để phân quyền khá là quan trọng
        - Route::view('$path, $viewName, $data): nhận request sau đó render view
        - Route::get('path/{thamso}', $callback): lấy tham sô tự động trên url
        - Route::get('path/{thamso}', $callback)->where('thamso',$pattern): Ràng buộc thamso với biểu thức chính quy
        - Route::get($path, $callback)->name('route_name'); đặt tên route để thuận tiện việc gọi url sau này
    - route api
    - route console
    - route channal
- HTTP Request 

* * *



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)
