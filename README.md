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
This is the first time a method is defined to call on the API endpoint. `createPostFunc()` uses `router` by `InertisJS` which doesn't require us to explicitly install/call `axios`. Read more about how InteriaJS does this [here](https://inertiajs.com/manual-visits).

- Home Page Carousel [39:17](https://www.youtube.com/watch?v=MjkamZQJY_8&t=2357s)
Home page uses `vue3-carousel`. Read more about it [here](https://ismail9k.github.io/vue3-carousel/getting-started.html)

- Home Page Posts [46:24](https://www.youtube.com/watch?v=MjkamZQJY_8&t=2784s)
- Likes Component [48:28](https://www.youtube.com/watch?v=MjkamZQJY_8&t=2908s)
- Home Page [48:28](https://www.youtube.com/watch?v=MjkamZQJY_8&t=2980s)
- User Page | Vue Js | Tailwind CSS [50:41](https://www.youtube.com/watch?v=MjkamZQJY_8&t=3041s)
- User Page ContentOverlay Component [1:00:12](https://www.youtube.com/watch?v=MjkamZQJY_8&t=3612s)
- User Page ContentOverlay Component [1:03:08](https://www.youtube.com/watch?v=MjkamZQJY_8&t=3788s)

- Connect Database & Register User | Laravel [1:08:10](https://www.youtube.com/watch?v=MjkamZQJY_8&t=4090s)

- ShowPostOverlay | Vue JS | Tailwind CSS [1:11:07](https://www.youtube.com/watch?v=MjkamZQJY_8&t=4267s)
- ShowPostOptionsOverlay [1:23:07](https://www.youtube.com/watch?v=MjkamZQJY_8&t=4987s)

#### Reference

- [Full Stack Instagram Clone by John Weeks Dev](https://www.youtube.com/watch?v=MjkamZQJY_8)
- [Laravel Docs, v11](https://laravel.com/docs/11.x)
- [Laravel Starter Kits](https://laravel.com/docs/11.x/starter-kits)