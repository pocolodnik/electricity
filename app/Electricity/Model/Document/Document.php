<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 4:35
 */

namespace Model\Document;


use Model\Period\Period;

class Document
{
    /**
     * @var int
     */
    private $num;
    /**
     * @var Period
     */
    private $period;
    /**
     * @var array
     */
    private $calculations=[];

    /**
     * Document constructor.
     * @param $num
     * @param \Model\Period\PeriodInterface $period
     */
    public function __construct($num, \Model\Period\PeriodInterface $period)
    {
        $this->setNum($num);
        $this->setPeriod($period);

    }
    /**
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }
    /**
     * @param int $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }
    /**
     * @return Period
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * @param Period $period
     */
    public function setPeriod(\Model\Period\PeriodInterface $period)
    {
        $this->period = $period;
    }

    /**
     * @param \Model\Calculations\CalculationInterface $calculation
     */
    public function addCalculation(\Model\Calculations\CalculationInterface $calculation)
    {
        $this->calculations[] = $calculation;

    }
    /**
     * @param $index
     */
    public function remCalculations($index)
    {
        unset($this->calculations[$index]);
    }
    /**
     * @return array
     */
    public function getCalculations()
    {
        return $this->calculations;
    }
    /**
     * @param $index
     * @return \Model\Calculations\CalculationInterface
     */
    public function getCalculationByIndex($index)
    {
        return $this->calculations[$index];
    }

    /**
     * @return float|int
     */
    public function getTotalSum1()
    {
        $totalSum1 = 0;
        foreach ($this->calculations as $value)
        {
            $totalSum1 += $value->getSum1();
        }
        return $totalSum1;
    }

    /**
     * @return float|int
     */
    public function getTotalSum2()
    {
        $totalSum2 = 0;
        foreach ($this->calculations as $value)
        {
            $totalSum2 += $value->getSum2();
        }
        return $totalSum2;
    }

    /**
     * @return float|int
     */
    public function getTotalSum3()
    {
        $totalSum3 = 0;
        foreach ($this->calculations as $value)
        {
            $totalSum3 += $value->getSum3();
        }
        return $totalSum3;
    }


}