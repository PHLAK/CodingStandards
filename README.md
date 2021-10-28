PHLAK's Coding Standards
========================

<p align="center">
    <a href="https://github.com/PHLAK/CodingStandards/discussions"><img src="https://img.shields.io/badge/Join_the-Community-7b16ff.svg?style=for-the-badge" alt="Join our Community"></a>
    <a href="https://github.com/users/PHLAK/sponsorship"><img src="https://img.shields.io/badge/Become_a-Sponsor-cc4195.svg?style=for-the-badge" alt="Become a Sponsor"></a>
    <a href="https://paypal.me/ChrisKankiewicz"><img src="https://img.shields.io/badge/Make_a-Donation-006bb6.svg?style=for-the-badge" alt="One-time Donation"></a>
    <br>
    <a href="https://packagist.org/packages/phlak/coding-standards"><img src="https://img.shields.io/packagist/v/phlak/coding-standards.svg?style=flat-square" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/phlak/coding-standards"><img src="https://img.shields.io/packagist/dt/phlak/coding-standards.svg?style=flat-square" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/phlak/coding-standards"><img src="https://img.shields.io/packagist/l/phlak/coding-standards.svg?style=flat-square" alt="License"></a>
    <a href="https://github.com/PHLAK/CodingStandards/actions"><img src="https://img.shields.io/github/checks-status/PHLAK/CodingStandards/master?style=flat-square" alt="GitHub branch checks state"></a>
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

After installation you may initialze the coding standards configuration with the provided `cs` executable.

    composer exec cs init

Alternatively you may manually create a `.php-cs-fxer.dist.php` file in the root folder with the following contents.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()->in([
    // List of paths you wish to include
]);

return PHLAK\CodingStandards\ConfigFactory::make($finder);
```

Add the paths you wish to be coverd to the array.

Now you may run `php-cs-fixer` as normal.

#### Add / Override Rules

You can add additional rules or override pre-defined ones by passing them as the second parameter to the `ConfigFactory::make()` method. These rules will be merged with the pre-defined rules.

```php
return PHLAK\CodingStandards\ConfigFactory::make($finder, [
    // Your additional rules here...
]);
```

#### Additional Configuration

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

For general help and support join our [GitHub Discussions](https://github.com/PHLAK/CodingStandards/discussions) or reach out on [Twitter](https://twitter.com/PHLAK).

Please report bugs to the [GitHub Issue Tracker](https://github.com/PHLAK/CodingStandards/issues).

Copyright
---------

This project is licensed under the [MIT License](https://github.com/PHLAK/CodingStandards/blob/master/LICENSE).
