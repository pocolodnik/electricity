<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 2:35
 */

namespace Model\Agent;


use Model\Agent\Persistence\AgentTable;

class Agent implements AgentInterface
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $status;
    /**
     * @var AgentTable
     */
    private $persistance = null;

    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return AgentTable
     */
    public function getPersistence()
    {
        if ($this->persistance === null){
            $this->persistance = new AgentTable();
            $this->persistance->setModel($this);
        }
        return $this->persistance;
    }

}