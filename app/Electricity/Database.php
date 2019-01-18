<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.01.19
 * Time: 18:45
 */

namespace Electricity;


use orm\DataBase\AbstractDataBase;
use orm\Exceptions\OrmRuntimeException;
use orm\Query\QueryMemento;

class Database extends AbstractDataBase
{
//    public $dbtype = "mysql";           // driver for connection and executing queries
//    public $dbname = "elctric_db";     // database name (dbname and this class are not equal by case of letters)
//    public $user = "alex";              // login
//    public $password = "him";

    /**
     * Database constructor.
     * @param $settings
     */
    public function __construct($settings)
    {
        try {
            QueryMemento::getInstance()
                ->addQueryData("dbname", $settings['dbname'])
                ->addQueryData("dbtype", $settings['dbtype'])
                ->addQueryData("username", $settings['user'])
                ->addQueryData("password", $settings['password']);

        } catch (\Exception $exception) {
            die (new OrmRuntimeException("Expected username and password for mysql server"));
        }
    }
}