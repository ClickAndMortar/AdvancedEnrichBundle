# Advanced Enrich Bundle - C&M

Advanced Enrich Bundle is an extension of Akeneo Enrich bundle. It allows you to manage more fields types and other display options.

Made with :blue_heart: by C&M

## Versions

| **Bundle version** | **Akeneo version** |
|--------------------|--------------------|
| v6.0.*             | v6.0.*             |
| v1.2.*             | v4.0.*             |
| v1.1.*             | v3.1.* / v3.2.*    |
| v1.0.*             | v2.3.*             |

## Installation

### Download the Bundle

```console
$ composer require clickandmortar/advanced-enrich-bundle
```

### Enable the Bundle

Enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
<?php

return [
    ...
    ClickAndMortar\AdvancedEnrichBundle\ClickAndMortarAdvancedEnrichBundle::class => ['all' => true],
    ...
];
```
