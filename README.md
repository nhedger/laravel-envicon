# Laravel Envicon

This packages allows you to display a custom favicon depending on your
runtime environment. This makes it easy to identify immediately on which
environment you're browsing.

## Install

Via [Composer](https://getcomposer.org/)

```shell script
composer require hedger/laravel-envicon
```

Once the package is installed, you'll need to **publish the configuration**
to link your environments to custom favicons.

```shell script
php artisan vendor:publish --tag=config --provider="Hedger\Envicon\ServiceProvider"
```

## Usage

Simply use the provided helper in place of your favicon's URL. This will
return the favicon that matches your current **runtime environment**.

```blade
<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" href="{{ Envicon::url() }}">
    </head>
</html>
```

If you need the URL of a favicon for a **specific environment**, use the
following statement instead. You'll need to pass the environment's name
as the first parameter.

```blade
<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" href="{{ Envicon::for('production') }}">
    </head>
</html>
```

## Testing
Tests can be run using the following composer script.
```shell script
composer test
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

