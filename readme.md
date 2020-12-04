# Sample promo 

## Assumptions
- There is only one Client running promotions using both mechanics i.e Winning moment and Chance.
- Users can enter only once in either of these promotions.

## Installation & Setup
- Application is built using Lumen v5.8.x Copy/clone this repository and install it's dependencies using:

```
$ composer install
```
More info can be found at https://lumen.laravel.com/docs/5.8/installation

- Create a `.env` file by duplicating `.env.example` and update database + other relevant credentials on there.

More info can be found at https://lumen.laravel.com/docs/5.8/configuration   

- Lastly, run the following command to create the database schema:

```
$ php artisan migrate
```