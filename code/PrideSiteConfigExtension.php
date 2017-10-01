<?php

/**
 * Class PrideSiteConfigExtension
 *
 * @property SiteConfig|PrideSiteConfigExtension $owner
 * @property int $Pridecode
 */
class PrideSiteConfigExtension extends DataExtension
{

    private static $db = array(
        'Pridecode' => 'Int'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Main', $selector = DropdownField::create('Pridecode', 'Show my pride', [
            1 => 'Right corner "Vote yes"',
            2 => 'Left corner, "Vote yes"',
            3 => 'Proud of my code and my life',
            4 => 'Generic rainbow corner',
            5 => 'Rainbow bar'
        ]));
        $selector->setEmptyString('-- Choose your pride --');
    }
}