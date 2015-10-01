<?php
/**
 * Copyright © 2015 Inchoo d.o.o.
 * created by Zoran Salamun(zoran.salamun@inchoo.net)
 */
namespace Inchoo\CustomControllers\Controller\Demonstration;

class Sayhello extends \Magento\Framework\App\Action\Action
{
    /**
     * say hello text
     */
    public function execute()
    {
        die("Hello ;) - Inchoo\\CustomControllers\\Controller\\Demonstration\\Sayhello - execute() method");
    }
}