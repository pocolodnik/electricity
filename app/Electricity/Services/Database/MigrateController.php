<?php

namespace Electricity\Services\Database;

use Electricity\Services\ControllerInterface;

class MigrateController implements ControllerInterface
{
    public function execute($request, $response)
    {
        $modelClassName = $request->param('model');
        if (!is_null($modelClassName)) {

            if (class_exists($modelClassName)) {
                $model = \Electricity\Services\DiContainer::getInstance()->make($modelClassName);

                if ($model->getPersistence()->migrate()) {
                    return 'Success';
                }
            }
        }

        return "please specify correct model class name, for example: ?model=Shop\Customer\Customer";
    }
}