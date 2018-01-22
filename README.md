# Laravel Bootstrap Components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/appstract/laravel-bootstrap-components.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-bootstrap-components)
[![Total Downloads](https://img.shields.io/packagist/dt/appstract/laravel-bootstrap-components.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-bootstrap-components)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

Easily use Bootstrap 4 components as Laravel components. 

You can help with adding components by creating a pull request.

## Installation

You can install the package via composer:

```bash
composer require appstract/laravel-bootstrap-components
```

## Usage

Examples:
```blade
@component('bootstrap::modal')
    This is the content of the modal
@endcomponent

@component('bootstrap::progress', ['value' => 75]) 
    // Extra bars
@endcomponent
```

More components and documentation [in the wiki](https://github.com/appstract/laravel-bootstrap-components/wiki).

## Contributing

Contributions are very welcome! If you want to add a component, please keep the following in mind when creating a pull request:

- Have a look at the existing components for examples.
- Customization of the component (like custom classes and options for the component).
- Provide some docs in the [wiki](https://github.com/appstract/laravel-bootstrap-components/wiki).

[Thanks to all the contributors](https://github.com/appstract/laravel-bootstrap-components/graphs/contributors)

## About Appstract

Appstract is a small team from The Netherlands. We create (open source) tools for webdevelopment and write about related subjects on [Medium](https://medium.com/appstract). You can [follow us on Twitter](https://twitter.com/teamappstract), [buy us a beer](https://www.paypal.me/teamappstract/10) or [support us on Patreon](https://www.patreon.com/appstract).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
