<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 4:00
 */

namespace Electricity\Model\Calculations;

use Electricity\Model\Agent\Agent;
use Electricity\Services\Model\AbstractModel;

class Calculation extends AbstractModel implements CalculationInterface
{
    /**
     * @var int
     * @primery
     * @field
     */
    private $id;
    /**
     * @var int
     * @field
     */
    private $agentId;
    /**
     * @var Agent
     */
    private $agent;

    /**
     * @var int
     * @field
     */
    private $tariffId;
    /**
     * @return int
     */
    public function getTariffId()
    {
        return $this->tariffId;
    }

    /**
     * @param int $tariffId
     */
    public function setTariffId($tariffId)
    {
        $this->tariffId = $tariffId;
    }

    /**
     * @var \Electricity\Model\Tariffs\TariffInterface
     */
    private $tariff;
    /**
     * @var float
     * @field
     */
    private $qty1;
    /**
     * @var float
     * @field
     */
    private $qty2;
    /**
     * @var float
     * @field
     */
    private $qty3;

    /**
     * @var string
     */
    protected $persistenceClass = "\Electricity\Model\Calculations\Persistence\CalculationPersistence";

    /**
     * Calculation constructor.
     * @param string $name
     * @param \Electricity\Model\Tariffs\TariffInterface $tariff
     */
    public function __construct($name, \Electricity\Model\Tariffs\TariffInterface $tariff)
    {
        $this->agent = new Agent($name);
        $this->agent->setName($name);
        $this->tariff = $tariff;

    }
    /**
     * @return float|int
     */
    public function getQty1()
    {
        return $this->qty1;
    }
    /**
     * @param float|int $qty1
     */
    public function setQty1($qty1)
    {
        $this->qty1 = $qty1;
    }
    /**
     * @return float|int
     */
    public function getQty2()
    {
        return $this->qty2;
    }
    /**
     * @param float|int $qty2
     */
    public function setQty2($qty2)
    {
        $this->qty2 = $qty2;
    }
    /**
     * @return float|int
     */
    public function getQty3()
    {
        return $this->qty3;
    }
    /**
     * @param float|int $qty3
     */
    public function setQty3($qty3)
    {
        $this->qty3 = $qty3;
    }
    /**
     * @return float|int
     */
    public function getSum1()
    {
        return $this->qty1 * $this->tariff->getPrice1();
    }
    /**
     * @return float|int
     */
    public function getSum2()
    {
        return $this->qty2 * $this->tariff->getPrice2();
    }
    /**
     * @return float|int
     */
    public function getSum3()
    {
        return $this->qty3 * $this->tariff->getPrice3();
    }
    /**
     * @return \Electricity\Model\Tariffs\TariffInterface
     */
    public function getTariff()
    {
        return $this->tariff;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * @param int $agentId
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;
    }

    /**
     * @return Agent
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param Agent $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    }


}