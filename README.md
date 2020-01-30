# Simple API Mocker


## How to use it

1. clone the repo: `git clone https://github.com/erickthered/simple-api-mocker.git`
2. cd into the repo: `cd simple-api-mocker`
3. install composer dependencies: `composer install`
4. start the demo server on port 8000 (or any other available port): `php -S 0.0.0.0:8000`
5. modify index.php at your convenience!

## Sample routes

* GET - `/` returns the word "Home"
* GET - `/users` returns an array of "users" with only one user
* POST - `/users` mocks a response of a service that creates one user
