<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.01.19
 * Time: 18:55
 */

namespace Model\Agent\Persistence;

use Model\Agent\AgentInterface;
use orm\DataBase\Field;
use orm\DataBase\Table;


class AgentTable extends Table
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $status;
    /**
     * @var AgentInterface
     */
    private $model;

    /**
     * @param AgentInterface $model
     */
    public function setModel(AgentInterface $model)
    {
        $this->model = $model;
    }

    public function __construct()
    {
        $this->table_name = "Agents";               // if name of table and this class are not equal, place name of table in this field
        // describe fields type
        $this->id = Field::primaryKey();            // describe PrimaryKey (with auto_increment)
        $this->name = Field::varchar(100);  // describe varchar field of 100 symbools
        $this->status = Field::varchar(1);  // describe varchar field of 100 symbools
        $this->initTable();                          // call method for initialisation table
    }

    public function save()
    {
        //$this->id = $this->model->getId();
        $this->name = $this->model->getName();
        $this->status = $this->model->getStatus();

        parent::save();

    }

    public function load($id)
    {
        $data = self::find(['id'=>$id]);

        if (count($data))
        {
            $data = $data[0];
            $this->model->setId($data->id);
            $this->model->setName($data->name);
            $this->model->setStatus($data->status);

        }

    }

}