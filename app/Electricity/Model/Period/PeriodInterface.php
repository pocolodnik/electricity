<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 3:17
 */

namespace Electricity\Model\Period;

interface PeriodInterface
{
    /**
     * @return int
     */
    public function getMonth();

    /**
     * @param int $month
     */
    public function setMonth($month);

    /**
     * @return int
     */
    public function getYear();

    /**
     * @param int $year
     */
    public function setYear($year);
}