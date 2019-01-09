<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.01.19
 * Time: 18:45
 */

namespace Electricity;


use orm\DataBase\AbstractDataBase;

class Database extends AbstractDataBase
{
    public $dbtype = "mysql";           // driver for connection and executing queries
    public $dbname = "elctric_db";     // database name (dbname and this class are not equal by case of letters)
    public $user = "alex";              // login
    public $password = "him";
}