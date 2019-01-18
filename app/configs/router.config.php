<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.01.19
 * Time: 16:38
 */

return [
    'routers' =>[
        [
            'method' => "GET",
            'path' => "/",
            'className'=> 'Electricity\Model\Agent\Controller\AgentViewCollection'
        ],
        [
            'method' => "GET",
            'path' => "/migrate/",
            'className' => "\Electricity\Services\Database\MigrateController"
        ],
//        [
//            'method'=>'GET',
//            'path'=> '/agent/[:id]',
//            'className'=> 'Electricity\Model\Agent\Controller\AgentController'
//        ],
        [
            'method'=>'GET',
            'path'=> '/agent/view/[:id]',
            'className'=> 'Electricity\Model\Agent\Controller\AgentView'
        ],
        [
            'method'=>'GET',
            'path'=> '/agent/',
            'className'=> 'Electricity\Model\Agent\Controller\AgentViewCollection'
        ],
        [
            'method'=>'GET',
            'path'=> '/agent/new',
            'className'=> 'Electricity\Model\Agent\Controller\AgentControllerNew'
        ],
        [
            'method'=>'POST',
            'path'=> '/agent/save',
            'className'=> 'Electricity\Model\Agent\Controller\AgentSave'
        ],
        [
            'method'=>'GET',
            'path'=> '/agent/edit/[:id]',
            'className'=> 'Electricity\Model\Agent\Controller\AgentEdit'
        ],
        [
            'method'=>'POST',
            'path'=> '/agent/overwrite',
            'className'=> 'Electricity\Model\Agent\Controller\AgentOverwrite'
        ],
        [
            'method'=>'GET',
            'path'=> '/agent/remove/[:id]',
            'className'=> 'Electricity\Model\Agent\Controller\AgentDelete'
        ],

    ],

    \Electricity\Services\Router::class => DI\create()->constructor(\DI\get('routers'))

];