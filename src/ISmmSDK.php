<?php
/*
 * @Author: arvinlp 
 * @Date: 2022-03-28 17:44:38 
 * Copyright by Arvin Loripour 
 * WebSite : http://www.arvinlp.ir 
 * @Last Modified by: Arvin.Loripour
 * @Last Modified time: 2022-03-28 17:45:00
 */

namespace Arvinlp\SmmSDK\ISmmSDK;

use Arvinlp\SmmSDK\OrderAPI;

interface ISmmSDK
{
    /**
     * @return float
     */
    public function getBalance();

    /**
     * @return mixed
     */
    public function getServices();

    /**
     * @param OrderAPI $order
     *
     * @return mixed
     */
    public function orderCreate(OrderAPI $order);

    /**
     * @param int $orderID
     *
     * @return mixed
     */
    public function orderStatus(int $orderID);
}
