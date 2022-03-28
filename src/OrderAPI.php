<?php
/*
 * @Author: arvinlp 
 * @Date: 2022-03-28 17:44:38 
 * Copyright by Arvin Loripour 
 * WebSite : http://www.arvinlp.ir 
 * @Last Modified by:   Arvin.Loripour 
 * @Last Modified time: 2022-03-28 17:44:38 
 */

namespace Arvinlp\SmmSDK;

class OrderAPI
{
    public $service = 0;
    public $link = '';
    public $quantity = 0;

    /**
     * OrderAPI constructor.
     *
     * @param $service
     * @param $link
     * @param $quantity
     */
    public function __construct(int $service, string $link, int $quantity)
    {
        $this->service = $service;
        $this->link = $link;
        $this->quantity = $quantity;
    }

    public function toArray()
    {
        return (array) $this;
    }
}
