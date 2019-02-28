# Advanced Enrich Bundle - C&M

Advanced Enrich Bundle is an extension of Akeneo Enrich bundle. It allows you to manage more fields types and other display options.

Made with :blue_heart: by C&M

## Installation

### Download the Bundle

```console
$ composer require clickandmortar/advanced-enrich-bundle
```

### Enable the Bundle

Enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new ClickAndMortar\AdvancedEnrichBundle\ClickAndMortarAdvancedEnrichBundle(),
        ];

        // ...
    }

    // ...
}
```