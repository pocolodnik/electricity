<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 2:35
 */

namespace Electricity\Model\Agent;


use \Electricity\Services\Model\AbstractModel;
use \Electricity\Services\Model\Agent\AgentInterface;

class Agent extends AbstractModel implements AgentInterface
{
    /**
     * @primary
     * @field
     */
    protected $id;
    /**
     * @var string
     * @field
     */
    protected $name;
    /**
     * @var string
     * @field
     */
    protected $status;
//    /**
//     * @var TariffPersistence
//     */
//    private $persistance = null;
    /**
     * @var string
     */
    protected $persistenceClass = "\Electricity\Model\Agent\Persistence\AgentTable";

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

//    /**
//     * @return TariffPersistence
//     */
//    public function getPersistence()
//    {
//        if ($this->persistance === null){
//            $this->persistance = new TariffPersistence();
//            $this->persistance->setModel($this);
//        }
//        return $this->persistance;
//    }

}