<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 4:35
 */

namespace Model\Document;


class Document
{
    private $num;
    private $period;
    private $calculations=[];

    public function __construct($num, \Model\Period\PeriodInterface $period)
    {
        $this->setNum($num);
        $this->setPeriod($period);

    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param mixed $period
     */
    public function setPeriod(\Model\Period\PeriodInterface $period)
    {
        $this->period = $period;
    }

    public function addCalculation(\Model\Calculations\CalculationInterface $calculation)
    {
        $this->calculations[] = $calculation;

    }

    public function remCalculations($index)
    {
        unset($this->calculations[$index]);
    }

    public function getCalculations()
    {
        return $this->calculations;
    }

    public function getCalculationsByIndex($index)
    {
        return $this->calculations[$index];
    }

    public function getTotalSum1()
    {
        $totalSum1 = 0;
        foreach ($this->calculations as $value)
        {
            $totalSum1 += $value->getSum1();
        }
        return $totalSum1;
    }

    public function getTotalSum2()
    {
        $totalSum2 = 0;
        foreach ($this->calculations as $value)
        {
            $totalSum2 += $value->getSum2();
        }
        return $totalSum2;
    }

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