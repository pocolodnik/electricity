<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 4:06
 */
const DOCROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";

set_error_handler(function ($errno , $errstr) {
    throw new Electricity\Services\SystemException($errstr, $errno);
}, E_ALL);

\Electricity\App::run();

//ini_set('include_path', DIR);

//include_once "Autoloader.php";
//$period = new \Electricity\Model\Period\Period(1,2019);
//$agent = new \Electricity\Model\Agent\Agent('Nail');
//$agent->setStatus('1');
//$tariff = new \Electricity\Model\Tariffs\Tariff(750,0.321,0.324,0.114);
//$calculation = new \Electricity\Model\Calculations\Calculation($agent->getName(),$tariff);
//$calculation->setQty1(0.752);
//$calculation->setQty2(0.852);
//$calculation->setQty3(0.452);
//$doc = new \Electricity\Model\Document\Document(100,$period);
//$doc->addCalculation($calculation);
//$calculation->setQty1(0.799);
//$calculation->setQty2(0.152);
//$calculation->setQty3(0.052);
//$doc->addCalculation($calculation);
//echo '<pre>';
//
//print_r($doc);
//
//echo '<br>';
//
//
//echo 'DocItem2.Qty1: ' . $doc->getCalculationByIndex(1)->getQty1() . '  DocItem2.Price1: ' .
//    $doc->getCalculationByIndex(1)->getTariff()->getPrice1() . '  DocItem2.Sum1: ' .
//    $doc->getCalculationByIndex(1)->getSum1();
//
//echo '<br>';
//
//print_r("DocTotalSum1: " . $doc->getTotalSum1());
//echo '<br>';
//print_r("DocTotalSum2: " . $doc->getTotalSum2());
//echo '<br>';
//print_r("DocTotalSum3: " . $doc->getTotalSum3());

//echo '<br>';
//
//$db = new \Electricity\Database();
//$agent->getPersistence()->save();
//print_r($agent->getName());

//$router = new \Electricity\Services\Router();
//$router->dispatch();
//
//die();

//$collect = $agent->getPersistence()->getCollection();
//print_r($collect);
//
//print_r($agent->getPersistence()->load(2));
//
//$agentController = new \Electricity\Model\Agent\Controller\AgentController();
////$agentController->Execute(2);
//
//print_r($agentController->Execute(2,1));

//added:
//
//-composer
//-Logger
//-ORM sagrishin/lightweight-php-orm
//-Migration Class Agent to MySQL Table
//-Persistence TariffPersistence for Agent (method:construct,load,save)