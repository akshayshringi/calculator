#Media

This package saves uploaded files and links them with models

## Installation

### Laravel 5

Using Composer, edit your `composer.json` file to autoload.

    "require": {
	  "akshay/calculator"
	}

Then from the terminal run

    composer update

Then in your `app/config/app.php` file register the service providers:

```php
Akshay\Calculator\CalculatorServiceProvider::class,
```