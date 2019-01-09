<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 4:30
 */

namespace Model\Calculations;

interface CalculationInterface
{
    /**
     * @return float|int
     */
    public function getQty1();

    /**
     * @param float|int $qty1
     */
    public function setQty1($qty1);

    /**
     * @return float|int
     */
    public function getQty2();

    /**
     * @param float|int $qty2
     */
    public function setQty2($qty2);

    /**
     * @return float|int
     */
    public function getQty3();

    /**
     * @param float|int $qty3
     */
    public function setQty3($qty3);

    /**
     * @return float|int
     */
    public function getSum1();

    /**
     * @return float|int
     */
    public function getSum2();

    /**
     * @return float|int
     */
    public function getSum3();

    /**
     * @return \Model\Tariffs\TariffInterface
     */
    public function getTariff();
}