<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 3:33
 */

namespace Model\Tariffs;


class Tariff implements TariffInterface
{
    private $basic;
    private $koef1;
    private $koef2;
    private $koef3;

    public function __construct($basic,$koef1,$koef2,$koef3)
    {
        $this->basic = $basic;
        $this->koef1 = $koef1;
        $this->koef2 = $koef2;
        $this->koef3 = $koef3;

    }

    public function getPrice1()
    {
        return $this->basic * $this->koef1;
    }

    public function getPrice2()
    {
        return $this->basic * $this->koef2;
    }

    public function getPrice3()
    {
        return $this->basic * $this->koef3;
    }
}