<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.01.19
 * Time: 3:04
 */

namespace Electricity\Services\Model;


interface PersistebleEntityInterface
{
    /**
     * @return \Electricity\Services\Persistence\Resource
     */
    public function getPersistence();
}