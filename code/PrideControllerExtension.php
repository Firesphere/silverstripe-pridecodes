<?php



class PrideControllerExtension extends Extension
{

    public function onBeforeInit()
    {
        $config = SiteConfig::current_site_config();
        switch ($config->Pridecode) {
            case 1:
                Requirements::javascript('https://cdn.pride.codes/js/voteyes.js');
                break;
            case 2:
                Requirements::javascript('https://cdn.pride.codes/js/voteyes-left.js');
                break;
            case 3:
                Requirements::javascript('https://cdn.pride.codes/js/codecorner.js');
                break;
            case 4:
                Requirements::javascript('https://cdn.pride.codes/js/rainbowcorner.js');
                break;
            case 5:
                Requirements::css('https://cdn.pride.codes/css/bar_body.css');
                break;

        }
    }
}