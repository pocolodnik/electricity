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
    /**
     * @var Agent
     */
    private $agent;
    /**
     * @var \Model\Tariffs\TariffInterface
     */
    private $tariff;
    /**
     * @var float|int
     */
    private $qty1;
    /**
     * @var float|int
     */
    private $qty2;
    /**
     * @var float|int
     */
    private $qty3;

    /**
     * Calculation constructor.
     * @param $name
     * @param \Model\Tariffs\TariffInterface $tariff
     */
    public function __construct($name, \Model\Tariffs\TariffInterface $tariff)
    {
        $this->agent = new Agent($name);
        $this->agent->setName($name);
        $this->tariff = $tariff;

    }
    /**
     * @return float|int
     */
    public function getQty1()
    {
        return $this->qty1;
    }
    /**
     * @param float|int $qty1
     */
    public function setQty1($qty1)
    {
        $this->qty1 = $qty1;
    }
    /**
     * @return float|int
     */
    public function getQty2()
    {
        return $this->qty2;
    }
    /**
     * @param float|int $qty2
     */
    public function setQty2($qty2)
    {
        $this->qty2 = $qty2;
    }
    /**
     * @return float|int
     */
    public function getQty3()
    {
        return $this->qty3;
    }
    /**
     * @param float|int $qty3
     */
    public function setQty3($qty3)
    {
        $this->qty3 = $qty3;
    }
    /**
     * @return float|int
     */
    public function getSum1()
    {
        return $this->qty1 * $this->tariff->getPrice1();
    }
    /**
     * @return float|int
     */
    public function getSum2()
    {
        return $this->qty2 * $this->tariff->getPrice2();
    }
    /**
     * @return float|int
     */
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