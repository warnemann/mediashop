<?php

namespace mediashop\Containers;

use Plenty\Plugin\Templates\Twig;

class mediashopContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Theme::content.Theme');
    }
}
