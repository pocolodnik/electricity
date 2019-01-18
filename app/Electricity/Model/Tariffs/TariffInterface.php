<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 3:44
 */

namespace Electricity\Model\Tariffs;

interface TariffInterface
{
    /**
     * @return float|int
     */
    public function getPrice1();

    /**
     * @return float|int
     */
    public function getPrice2();

    /**
     * @return float|int
     */
    public function getPrice3();
}