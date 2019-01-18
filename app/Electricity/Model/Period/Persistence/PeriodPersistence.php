<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.01.19
 * Time: 3:28
 */

namespace Electricity\Model\Period\Persistence;


class PeriodPersistence extends \Electricity\Services\Persistence\Resource
{
    /**
     * @var string
     */
    protected $table_name = "Periods";

//    protected function getDataForSave()
//    {
//        $data = parent::getDataForSave();
//        $data['agentId'] = $this->model->getAgent()->getId();
//
//
//        return $data;
//    }


}