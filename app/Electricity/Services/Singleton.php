<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.01.19
 * Time: 6:58
 */

namespace Electricity\Services;


abstract class Singleton
{
    /**
     * Singletone instance
     */
    protected static $instance;

    /**
     * @return mixed
     */
    abstract public static function getInstance();

    /**
     * Singleton constructor.
     */
    private function __construct(){}

    private function __clone(){}

    private function __wakeup(){}
}