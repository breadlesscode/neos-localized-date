# Neos localized date
[![Latest Stable Version](https://poser.pugx.org/breadlesscode/neos-localized-date/v/stable)](https://packagist.org/packages/breadlesscode/neos-localized-date)
[![Downloads](https://img.shields.io/packagist/dt/breadlesscode/neos-localized-date.svg)](https://packagist.org/packages/breadlesscode/neos-localized-date)
[![License](https://img.shields.io/github/license/breadlesscode/neos-localized-date.svg)](LICENSE)
[![GitHub stars](https://img.shields.io/github/stars/breadlesscode/neos-localized-date.svg?style=social&label=Stars)](https://github.com/breadlesscode/neos-localized-date/stargazers)
[![GitHub watchers](https://img.shields.io/github/watchers/breadlesscode/neos-localized-date.svg?style=social&label=Watch)](https://github.com/breadlesscode/neos-localized-date/subscription)

A little Eel helper for date localization.

## Installation
Most of the time you have to make small adjustments to a package (e.g., the configuration in Settings.yaml). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site package located under Packages/Sites/. To install it correctly go to your theme package (e.g.Packages/Sites/Foo.Bar) and run following command:

```bash
composer require breadlesscode/neos-localized-date --no-update
```

The --no-update command prevent the automatic update of the dependencies. After the package was added to your theme composer.json, go back to the root of the Neos installation and run composer update. Your desired package is now installed correctly.

## Usage
The format parameter is using the [strftime()](http://php.net/manual/de/function.strftime.php) format and the locale parameter is optional.

```
    ${ LocalizedDate.format(Date.now(), '%d %B %G', 'de_DE') }
```

## Configuration
```yaml
Breadlesscode:
  LocalizedDate:
    defaultLocale: 'de_DE.utf8' # this locale is the default if no locale is given in Eel helper
```

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
