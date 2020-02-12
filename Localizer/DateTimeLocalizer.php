<?php

namespace ClickAndMortar\AdvancedEnrichBundle\Localizer;

use Akeneo\Component\Localization\Factory\DateFactory;
use Akeneo\Component\Localization\Localizer\DateLocalizer;
use Akeneo\Component\Localization\Validator\Constraints\DateFormat;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Override of native DateLocalizer to manage time in date attributes
 *
 * @author    Marie Bochu <marie.bochu@akeneo.com>
 * @copyright 2015 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class DateTimeLocalizer extends DateLocalizer
{
    /**
     * FR datetime format
     *
     * @var string
     */
    const FR_DATETIME_FORMAT = 'dd/MM/yyyy HH:mm';

    /**
     * @param array $options
     *
     * @return array
     */
    protected function getOptions(array $options)
    {
        if (!isset($options['date_format'])) {
            $options['date_format'] = self::FR_DATETIME_FORMAT;
        }

        return $options;
    }
}
