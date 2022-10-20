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
* * *
### Update schedule
|  #  | Update                                                                                                               | Date                                                                        |
| :-: | ---------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| 01  | login                              | 25/09/2022               |
| 02  | register                               | 27/09/2022          |
| 03  | fix-bug-account                              | 28/09/2022            |
| 04  | update-homepage-public                               | 29/09/2022         |
| 05  | update-profile                             | 03/10/2022            |
| 06  | update admin home page 1                            | 05/10/2022            |
| 07  | update admin frontend 2                           | 18/10/2022            |
| 08  | update admin login 3                           | 19/10/2022            |
| 09  | update products admin 4                           |20/10/2022            |
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
- 
* * *
### Buổi 1 (30/09/2022)
- Route là gì 
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
<<<<<<< HEAD

- HTTP Request 
    - 
=======
    
- HTTP Request 
    - 
>>>>>>> eba8e7b936b1ebd2492d65ba73b3a1a3ff5235d2
