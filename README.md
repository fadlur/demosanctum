<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Authentication di laravel 8 menggunakan sanctum

Project ini berisi proses authentication menggunakan laravel/sanctum dengan beberapa penyesuaian, diantaranya :
- Penyesuaian table users dengan menambahkan field status dan mengubah id menjadi increments
- Mengubah migration personal access token pada bagian morph('tokenable') dan juga id-nya menggunakan increments dari tadinya bigincrement
- Mengubah namespace controller di RouteServiceProvider.php
- Semua route berada di api.php
- Proses authentication di handle oleh controller AuthController.php

Lebih jelasnya disilahkan kunjungi [fadlur.com](https://fadlur.com) atau channel berikut :
<p align="center">
<a href="https://www.youtube.com/channel/UCco6jw76pBAcnUSkJGuQ99Q" target="_blank"><img src="https://fadlur.com/youtube.svg" width="30px" class="rounded thumbnail"></a><a href="https://www.linkedin.com/in/fadlur-rohman-a1110144/" target="_blank"><img src="https://fadlur.com/linkedin.svg" width="30px" class="mx-1 rounded thumbnail"></a><a href="https://www.facebook.com/fadlurdotcom" target="_blank"><img src="https://fadlur.com/facebook.svg" width="30px" class="mx-1 rounded thumbnail"></a><a href="https://twitter.com/fdlr__" target="_blank"><img src="https://fadlur.com/twitter.svg" width="30px" class="mx-1 rounded thumbnail"></a><a href="https://instagram.com/fadlur.dev" target="_blank"><img src="https://fadlur.com/instagram.svg" width="30px" class="mx-1 rounded thumbnail"></a><a href="https://github.com/fadlur" target="_blank"><img src="https://fadlur.com/github.svg" width="30px" class="mx-1 rounded thumbnail"></a><a href="https://wa.me/6285852527575" target="_blank"><img src="https://fadlur.com/whatsapp.svg" width="30px" class="ml-1 rounded thumbnail"></a>
</p>