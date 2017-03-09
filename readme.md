# API Authentication with Laravel Passport
Laravel API Authentication (Passport) sample application




[![Build Status](https://travis-ci.org/gazatem/api-authentication-passport.svg?branch=master)](https://travis-ci.org/gazatem/api-authentication-passport)

After cloning the repository, do not forget to run migrations and seeds. I've used Laravel Offical Vagrant to develop and test it.


Clone then repository:

    https://github.com/gazatem/api-authentication-passport.git


Run the composer to install dependencies:

    composer install
    
Copy .env.example file and modify the environments    
    
Run migrations and seeds:

    php artisan migrate:refresh --seed
    
    
This will create all database files with sample data. 



## Api Routes:

### api/auth
Browse to `http://YOUR-DOMAIN/api/auth`to test the auth system. This route will turn you back a token to use for access guarded routes:

### api/user  - Protected Route
User's home page with limited data binding.

### api/books
This route allows to anonymous browing.

### api/books/{book}  - Protected Route
This route protected with passpost. User must be authenticated by Passport


## How to guard the Routes:
In this sample, I've added a middleware to protect the route.


    Route::get('/books/{book}', 'ApiBookController@show')->middleware('auth:api');
