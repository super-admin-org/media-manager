Media manager for super-admin
===============================

<p align="center">

[![StyleCI](https://styleci.io/repos/384432915/shield?branch=main)](https://styleci.io/repos/387600925)
[![Packagist](https://img.shields.io/github/license/super-admin-org/media-manager.svg?style=flat-square&color=brightgreen)](https://packagist.org/packages/super-admin-ext/media-manager)
[![Total Downloads](https://img.shields.io/packagist/dt/super-admin-ext/media-manager.svg?style=flat-square)](https://packagist.org/packages/super-admin-ext/media-manager)
[![Pull request welcome](https://img.shields.io/badge/pr-welcome-green.svg?style=flat-square&color=brightgreen)]()

</p>

Media manager for `local` disk.

[Documentation](http://super-admin.org/docs/en/extension-media-manager)
## Screenshot

![wx20170809-170104](http://super-admin.org/docs/images/screenshots/ext-media-manager.png)

## Installation

```shell
composer require super-admin-ext/media-manager

php artisan admin:import media-manager
```

Add a disk config in `config/admin.php`:

```php

    'extensions' => [

        'media-manager' => [

            // Select a local disk that you configured in `config/filesystem.php`
            'disk' => 'public'
        ],
    ],

```


Open `http://localhost/admin/media`.

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
