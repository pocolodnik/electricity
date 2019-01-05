<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 3:44
 */

namespace Model\Tariffs;

interface TariffInterface
{
    public function getPrice1();

    public function getPrice2();

    public function getPrice3();
}