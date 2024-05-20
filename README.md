<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Fullstack Instagram Clone

Instagram clone app using Laravel, Vue.Js, Tailwind and Inertia JS.

- Laravel 11 comes preinstalled with `Tailwind` so no need to install it separately as in older versions. 
- Remove some default template/vue files and routes that we will not be using

## Project setup

```bash
composer create-project laravel/laravel instagram-clone

cd instagram clone

// install laravel breeze
composer require laravel/breeze --dev

php artisan breeze:install
// select vue & then select ssr

// Install required NPM packages
npm install vue-material-design-icons

npm install vue3-carousel
```

- MainLayout Section | Vue Js | Tailwind CSS [7:22](https://www.youtube.com/watch?v=MjkamZQJY_8&t=442s)
- MenuItem Component [12:20](https://www.youtube.com/watch?v=MjkamZQJY_8&t=740s)
- MainLayout Section [17:10](https://www.youtube.com/watch?v=MjkamZQJY_8&t=1030s)
- CreatePostOverlay Component [25:00](https://www.youtube.com/watch?v=MjkamZQJY_8&t=1500s)
- Home Page Carousel [39:17](https://www.youtube.com/watch?v=MjkamZQJY_8&t=2357s)

#### Reference

- [Full Stack Instagram Clone by John Weeks Dev](https://www.youtube.com/watch?v=MjkamZQJY_8)
- [Laravel Docs, v11](https://laravel.com/docs/11.x)
- [Laravel Starter Kits](https://laravel.com/docs/11.x/starter-kits)