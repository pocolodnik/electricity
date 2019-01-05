<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 5:11
 */

 class Autoloader
 {
 public static function load($className)
 {
 $fileName = str_replace('\\','/', $className);
 $fileName .= ".php";

 include_once $fileName;
 if (class_exists($className)) {
 return true;
 }

 return false;
 }
 }

 spl_autoload_register("Autoloader::load");