# Advanced Enrich Bundle - Click And Mortar

Advanced Enrich Bundle is an extension of Akeneo Enrich bundle. It allows you to manage more fields types and other display options.

## Installation

Add package your **`composer.json`** file:
```javascript
"require": {
    ...
    "clickandmortar/advanced-enrich-bundle": "^1.0"
    ...
}
```

Launch `composer require` to add bundle to your project:
```bash
composer require clickandmortar/advanced-enrich-bundle
```

Add bundle in your **`app/AppKernel.php`** file:
```php
$bundles = array(
            ...
            new ClickAndMortar\AdvancedEnrichBundle\ClickAndMortarAdvancedEnrichBundle(),
        );
```