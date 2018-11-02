<?php
namespace mishellnovosel\craft3_timediff;

use mishellnovosel\craft3_timediff\twigextensions\TwigExtensionDate;

class TimeDiffPlugin extends \craft\base\Plugin
{
    public function init()
    {
        parent::init();

        \Craft::$app->view->twig->addExtension(new TwigExtensionDate());

    }

    function getName()
    {
        return Craft::t('app', 'Time Diff');
    }

    function getVersion()
    {
        return '1.0.0';
    }

    function getDeveloper()
    {
        return 'Mishell Novosel';
    }

    function getDeveloperUrl()
    {
        return 'https://www.codecacao.com';
    }

    public function addTwigExtension()
    {
        return new TwigExtensionDate();
    }
}

