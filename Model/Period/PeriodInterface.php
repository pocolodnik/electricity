<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 3:17
 */

namespace Model\Period;

interface PeriodInterface
{
    /**
     * @return mixed
     */
    public function getMonth();

    /**
     * @param mixed $month
     */
    public function setMonth($month);

    /**
     * @return mixed
     */
    public function getYear();

    /**
     * @param mixed $year
     */
    public function setYear($year);
}