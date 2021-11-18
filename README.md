
## Installation

``` bash
# clone the repo

# go into app's directory
$ cd laravel

# install app's dependencies
$ composer install

# install app's dependencies
$ npm install
```


### Next step

``` bash
# in your app directory
# generate laravel APP_KEY
$ php artisan key:generate

# generate jwt secret
$ php artisan jwt:secret

# run database migration and seed
$ php artisan migrate:refresh --seed

```

```bash
# go to coreui directory
$ cd ../coreui

# install app's dependencies
$ npm install

```

### Test
``` bash

``` bash
# back to laravel directory
$ cd ../laravel

# start local server
$ php artisan serve

$ cd ../coreui

$ npm run serve
```