# laravel-cookie-confirm
Any website cannot use cookie without agree.

## Basic Usage

### Installation

```bash
composer require pinfort/laravel-cookie-confirm
```
Attention: Perhaps it is necessary to change the minimum stability of the composer...

### Publish files

```bash
php artisan vendor:publish
```
You will find three new files.
- resources/lang/vendor/CookieConfirm/en/cookie_confirm.php
- resources/lang/vendor/CookieConfirm/ja/cookie_confirm.php
- resources/views/vendor/CookieConfirm/confirm.blade.php
    - This file is main view.
    - You can edit this freely.

### Enable library

Add middleware to your kernel

in App\Http\Kernel.php near the line 38
```diff
 protected $middlewareGroups = [
    'web' => [
        ......
+       \Pinfort\LaravelCookieConfirm\Middleware\Confirm::class,
    ],
 ......
 ];
```
