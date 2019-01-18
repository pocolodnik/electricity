<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.01.19
 * Time: 5:51
 */

namespace Electricity\Services;


interface ControllerInterface
{
    public function execute($request, $response);
}