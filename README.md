![PHP version][ico-php-version]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Tests][ico-tests]][link-tests]
[![Total Downloads][ico-downloads]][link-downloads]


# Laravel Bol Retailer Api Wrapper

This is a laravel wrapper for the [Bol retailer API](https://github.com/123lens/bol-retailer-api)

## Installation

Install package using composer

``` bash
composer require budgetlens/laravel-bol-retailer-api
```

## Getting started

Update `.env` file with 
- BOL_CLIENT_ID
- BOL_CLIENT_SECRET
- BOL_TEST_MODE

If you wish you can publish the configuration.

``` bash
php artisan vendor:publish --provider="Budgetlens\Budgetlens\LaravelBolRetailerApi\ServiceProvider"

```

# Examples

## Get Offer
```php
    $offer = Bol::offers->get($id);
    ddd($offer);
```

## Testing
Run the tests with:

``` bash
$ composer test
```

## Versioning
We aim to keep versions the same as the wrapped package.

## Credits

- [Sebastiaan Blaas][link-author]
- [All Contributors][link-contributors]

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.



[ico-php-version]: https://img.shields.io/packagist/dependency-v/budgetlens/laravel-bol-retailer-api/php.svg?style=flat-square
[ico-version]: https://img.shields.io/packagist/v/budgetlens/laravel-bol-retailer-api.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-tests]: https://github.com/123lens/laravel-bol-retailer-api/actions/workflows/tests.yml/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/budgetlens/laravel-bol-retailer-api.svg?style=flat-square
[link-author]: https://github.com/avido
[link-contributors]: https://github.com/123lens/laravel-bol-retailer-api/graphs/contributors
[link-packagist]: https://packagist.org/packages/budgetlens/laravel-bol-retailer-api
[link-tests]: https://github.com/123lens/laravel-bol-retailer-api/actions/workflows/tests.yml?query=workflow%3Atests
[link-downloads]: https://packagist.org/packages/budgetlens/laravel-bol-retailer-api
