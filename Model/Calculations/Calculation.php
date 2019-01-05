<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 4:00
 */

namespace Model\Calculations;

use Model\Agent\Agent;

class Calculation implements CalculationInterface
{
    private $agent;
    private $tariff;
    private $qty1;
    private $qty2;
    private $qty3;

    public function __construct($name, \Model\Tariffs\TariffInterface $tariff)
    {
        $this->agent = new Agent($name);
        $this->agent->setName($name);
        $this->tariff = $tariff;

    }

    /**
     * @return mixed
     */
    public function getQty1()
    {
        return $this->qty1;
    }

    /**
     * @param mixed $qty1
     */
    public function setQty1($qty1)
    {
        $this->qty1 = $qty1;
    }

    /**
     * @return mixed
     */
    public function getQty2()
    {
        return $this->qty2;
    }

    /**
     * @param mixed $qty2
     */
    public function setQty2($qty2)
    {
        $this->qty2 = $qty2;
    }

    /**
     * @return mixed
     */
    public function getQty3()
    {
        return $this->qty3;
    }

    /**
     * @param mixed $qty3
     */
    public function setQty3($qty3)
    {
        $this->qty3 = $qty3;
    }

    public function getSum1()
    {
        return $this->qty1 * $this->tariff->getPrice1();
    }

    public function getSum2()
    {
        return $this->qty2 * $this->tariff->getPrice2();
    }

    public function getSum3()
    {
        return $this->qty3 * $this->tariff->getPrice3();
    }

    /**
     * @return \Model\Tariffs\TariffInterface
     */
    public function getTariff()
    {
        return $this->tariff;
    }

}