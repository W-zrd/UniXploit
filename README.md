
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# UniXploit
A Vulnerable and Exploitable version of [UniShare Project](https://github.com/flxnzz/UniShare), built with Laravel 8.

## Description

Actually, this project is used for the final task of the Software Testing and Web Programming course, but I set this project to test [CVE-2019-3129](https://nvd.nist.gov/vuln/detail/CVE-2021-3129). So this project is an archive of Laravel version 8 which is vulnerable to RCE.

**CVE-2021-3129:** in early 2021, Laravel had a vulnerability that allowed attackers to trigger Remote Code Execution by leveraging unsafe usage of PHP. The severity level of this vulnerability is **CRITICAL** *(9.8 of 10)*, which means it is above the HIGH severity level, and is of course very dangerous.

In general, this is similar to Log Poisoning which will lead to Remote Code Execution, gain control of the system, and expose the entire infrastructure.

## Prerequisites

This project uses Laravel version 8.83.27, So in order to run this project you need to install these requirements:

 - PHP version 7.3 or 7.4 *(tested on 7.3)*.
 - Latest version of Composer *(tested on Composer v2.6.5)*
 - Ignition v2.5.1



## How to Run?
- Simply run `composer install` and composer will set everything ready for you.
- Type this command:
  
```
composer require facade/ignition==2.5.1
```

- When its done, run the project by typing
```
php artisan serve --port 8001
```

- Done.

## Reference
- https://nvd.nist.gov/vuln/detail/CVE-2021-3129
- https://www.ambionics.io/blog/laravel-debug-rce
