PHLAK's Coding Standards
========================

<p align="center">
    <a href="https://spectrum.chat/phlaknet"><img src="https://img.shields.io/badge/Join_the-Community-7b16ff.svg?style=for-the-badge" alt="Join our Community"></a>
    <a href="https://github.com/users/PHLAK/sponsorship"><img src="https://img.shields.io/badge/Become_a-Sponsor-cc4195.svg?style=for-the-badge" alt="Become a Sponsor"></a>
    <a href="https://paypal.me/ChrisKankiewicz"><img src="https://img.shields.io/badge/Make_a-Donation-006bb6.svg?style=for-the-badge" alt="One-time Donation"></a>
    <br>
    <a href="https://packagist.org/packages/PHLAK/CodingStandards"><img src="https://img.shields.io/packagist/v/PHLAK/CodingStandards.svg?style=flat-square" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/PHLAK/CodingStandards"><img src="https://img.shields.io/packagist/dt/PHLAK/CodingStandards.svg?style=flat-square" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/PHLAK/CodingStandards"><img src="https://img.shields.io/packagist/l/PHLAK/CodingStandards.svg?style=flat-square" alt="License"></a>
    <a href="https://travis-ci.org/PHLAK/CodingStandards"><img src="https://img.shields.io/travis/PHLAK/CodingStandards.svg?style=flat-square" alt="Build Status"></a>
    <a href="https://styleci.io/repos/00000000"><img src="https://styleci.io/repos/00000000/shield?branch=master&style=flat-square" alt="StyleCI"></a>
</p>

<p align="center">
    A pre-defined set of coding standards for PHP CS Fixer
    <br>
    Created by <a href="https://www.ChrisKankiewicz.com">Chris Kankiewicz</a> (<a href="https://twitter.com/PHLAK">@PHLAK</a>)
</p>

---

Requirements
------------

  - PHP >= 7.2

Installation
------------

    composer require --dev phlak/coding-standards

Usage
-----

After installing in your project, create a `.php_cs.dist` file in the root folder with the following contents.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()->in([
    // List of paths you wish to include
]);

return PHLAK\CodingStandards\ConfigFactory::make($finder);
```

Now you may run `php-cs-fixer` as normal.

### Add / Override Rules

You can add additional rules or override pre-defined ones by passing them as the second parameter to the `ConfigFactory::make()` method. These rules will be merged with the pre-defined rules.

```php
return PHLAK\CodingStandards\ConfigFactory::make($finder, [
    // Your additional rules here...
]);
```

### Additional Configuration

Additional configuration can be achieved by chaining methods onto the `ConfigFactory::make()` method.

```php
return PHLAK\CodingStandards\ConfigFactory::make($finder)
    ->setIndent("\t")
    ->setLineEnding("\r\n")
    ->setRiskyAllowed();
```


Changelog
---------

A list of changes can be found on the [GitHub Releases](https://github.com/PHLAK/CodingStandards/releases) page.

Troubleshooting
---------------

For general help and support join our [Spectrum Community](https://spectrum.chat/phlak) or reach out on [Twitter](https://twitter.com/PHLAK).

Please report bugs to the [GitHub Issue Tracker](https://github.com/PHLAK/CodingStandards/issues).

Copyright
---------

This project is licensed under the [MIT License](https://github.com/PHLAK/CodingStandards/blob/master/LICENSE).
