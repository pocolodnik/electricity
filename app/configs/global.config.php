<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.01.19
 * Time: 7:15
 */

return [
    "log.errorFile" => DOCROOT . "/var/logs",

    "database" => [
        "dbtype" => "mysql",
        "dbname" => "elctric_db",
        "user" => "alex",
        "password" => "him",
    ],



    \Electricity\Database::class => DI\create()->constructor(DI\get('database')),

    \Katzgrau\KLogger\Logger::class => DI\create()->constructor(DI\get('log.errorFile')),

    \Electricity\Model\Agent\Agent::class => DI\create()->constructor("NoName"),

    \Electricity\Model\Calculations\Calculation::class => DI\create()
        ->constructor(DI\string('NoName'), DI\create(\Electricity\Model\Tariffs\Tariff::class))

];
