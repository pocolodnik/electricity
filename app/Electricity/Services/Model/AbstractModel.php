<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.01.19
 * Time: 3:03
 */

namespace Electricity\Services\Model;




class AbstractModel implements PersistebleEntityInterface
{
    /**
     * @var string
     */
    protected $persistenceClass;

    /**
     * @var \Electricity\Services\Persistence\Resource
     */
    protected $persistence = null;

    /**
     * @return null|\Electricity\Services\Persistence\Resource
     */
    public function getPersistence()
    {
        if ($this->persistence === null) {
            $this->persistence = new $this->persistenceClass();
            $this->persistence->setModel($this);
            $this->persistence->initTable();
        }

        return $this->persistence;
    }
}