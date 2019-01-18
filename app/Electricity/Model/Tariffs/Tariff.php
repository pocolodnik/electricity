<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 3:33
 */

namespace Electricity\Model\Tariffs;


class Tariff implements TariffInterface
{
    /**
     * @var float|int
     */
    private $basic;
    /**
     * @var float|int
     */
    private $koef1;
    /**
     * @var float|int
     */
    private $koef2;
    /**
     * @var float|int
     */
    private $koef3;

    /**
     * Tariff constructor.
     * @param $basic
     * @param $koef1
     * @param $koef2
     * @param $koef3
     */
//    public function __construct($basic,$koef1,$koef2,$koef3)
//    {
//        $this->basic = $basic;
//        $this->koef1 = $koef1;
//        $this->koef2 = $koef2;
//        $this->koef3 = $koef3;
//
//    }

    /**
     * @return float|int
     */
    public function getPrice1()
    {
        return $this->basic * $this->koef1;
    }

    /**
     * @return float|int
     */
    public function getPrice2()
    {
        return $this->basic * $this->koef2;
    }

    /**
     * @return float|int
     */
    public function getPrice3()
    {
        return $this->basic * $this->koef3;
    }
}