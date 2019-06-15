<?php


namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
class GetPic
{
    public function getPic()
    {
        $pic1 = HtmlFactory::class;
    }
}