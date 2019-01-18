<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 3:14
 */

namespace Electricity\Model\Period;


class Period implements PeriodInterface
{
    /**
     * @var int
     */
    private $month;
    /**
     * @var int
     */
    private $year;

    /**
     * Period constructor.
     * @param $month
     * @param $year
     */
    public function __construct($month,$year)
    {
        $this->setMonth($month);
        $this->setYear($year);}

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param int $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }


}