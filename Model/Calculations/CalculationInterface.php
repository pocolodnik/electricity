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
     * @return mixed
     */
    public function getQty1();

    /**
     * @param mixed $qty1
     */
    public function setQty1($qty1);

    /**
     * @return mixed
     */
    public function getQty2();

    /**
     * @param mixed $qty2
     */
    public function setQty2($qty2);

    /**
     * @return mixed
     */
    public function getQty3();

    /**
     * @param mixed $qty3
     */
    public function setQty3($qty3);

    public function getSum1();

    public function getSum2();

    public function getSum3();
}