# Advanced Enrich Bundle - Click And Mortar

Advanced Enrich Bundle is an extension of Akeneo Enrich bundle. It allows you to manage more fields types and other display options.

Made by :heart: by C&M

## Installation

Add package with composer:
```bash
composer require clickandmortar/advanced-enrich-bundle "^1.0"
```

Add bundle in your **`app/AppKernel.php`** file:
```php
$bundles = array(
            ...
            new ClickAndMortar\AdvancedEnrichBundle\ClickAndMortarAdvancedEnrichBundle(),
        );
```