<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.01.19
 * Time: 19:02
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use orm\Exceptions\MigrationException;

const DOCROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";

$db = new \Electricity\Database();

$agentTable = new \Model\Agent\Persistence\AgentTable();

$agentTable->migrate();