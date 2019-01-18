<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.01.19
 * Time: 7:05
 */

namespace Electricity\Services;


/**
 * @return \DI\Container
 * @throws \Exception
 */
class DiContainer extends Singleton
{
    public static function getInstance()
    {
        if (null === static::$instance){
            $builder = new \DI\ContainerBuilder();
            $builder->useAutowiring(true);
            $builder->addDefinitions(DOCROOT . "/app/configs/global.config.php");
            $builder->addDefinitions(DOCROOT . "/app/configs/router.config.php");
            static::$instance = $builder->build();

        }

        return static::$instance;
    }
}