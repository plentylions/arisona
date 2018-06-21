<?php

namespace Arisona\Containers;

use Plenty\Plugin\Templates\Twig;

class ArisonaContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Arisona::Stylesheet');
    }
}