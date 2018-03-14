<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Small_API_Project By Ayman Aljohary

[POST] /api/login : {'email':'admin@admin.com', 'password':'123456'}
[POST] /api/register : {'name':'hello', 'email':'admin@admin.com', 'password':'123456'}
[GET] /api/user?token=.... : UserInfo
[GET] /api/logout?token=.... : logout
[GET] /api/books?token=.... : Get the user Books
[POST] /api/books?token=.... : {'title':'book name', 'description': 'book description'}
[PUT] /api/books/{id}?token=.... : {'title':'book name 11', 'description': 'book description 11'}
[DELETE] /api/books/{id}?token=.... : Delete Book

