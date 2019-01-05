<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 04.01.19
 * Time: 22:49
 */

namespace Model\Agent;


interface AgentInterface
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getStatus();
    public function setStatus($status);


}