<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Passport Laravel API

A clean and secure RESTful API built with **Laravel** and **Laravel Passport** for token-based authentication.

This project demonstrates a simple yet complete backend API with user authentication and posts management using personal access tokens.

## Features

- User registration, login, and logout
- Bearer token authentication via Laravel Passport
- Protected routes with `auth:api` middleware
- Posts CRUD operations:
  - List posts (with pagination)
  - Create, view, update, and delete posts
- Custom token expiration configuration
- Proper validation, error handling, and JSON responses
- Standard Laravel structure (controllers, models, migrations, routes)

## Tech Stack

- Laravel 12
- Laravel Passport (personal access tokens)
- MySQL / MariaDB / PostgreSQL (or any supported DB)
- PHP 8.2+

