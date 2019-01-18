<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 04.01.19
 * Time: 22:49
 */

namespace Electricity\Services\Model\Agent;


interface AgentInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     */
    public function setStatus($status);


}