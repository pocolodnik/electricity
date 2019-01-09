<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.01.19
 * Time: 4:06
 */
const DOCROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";

//ini_set('include_path', DIR);

include_once "Autoloader.php";
$period = new \Model\Period\Period(1,2019);
$agent = new Model\Agent\Agent('Nail');
$agent->setStatus('1');
$tariff = new \Model\Tariffs\Tariff(750,0.321,0.324,0.114);
$calculation = new Model\Calculations\Calculation($agent->getName(),$tariff);
$calculation->setQty1(0.752);
$calculation->setQty2(0.852);
$calculation->setQty3(0.452);
$doc = new \Model\Document\Document(100,$period);
$doc->addCalculation($calculation);
$calculation->setQty1(0.799);
$calculation->setQty2(0.152);
$calculation->setQty3(0.052);
$doc->addCalculation($calculation);
echo '<pre>';

print_r($doc);

echo '<br>';


echo 'DocItem2.Qty1: ' . $doc->getCalculationByIndex(1)->getQty1() . '  DocItem2.Price1: ' .
    $doc->getCalculationByIndex(1)->getTariff()->getPrice1() . '  DocItem2.Sum1: ' .
    $doc->getCalculationByIndex(1)->getSum1();

echo '<br>';

print_r("DocTotalSum1: " . $doc->getTotalSum1());
echo '<br>';
print_r("DocTotalSum2: " . $doc->getTotalSum2());
echo '<br>';
print_r("DocTotalSum3: " . $doc->getTotalSum3());

$db = new \Electricity\Database();
$agent->getPersistence()->save();

print_r($agent->getName());


//added:
//
//-composer
//-Logger
//-ORM sagrishin/lightweight-php-orm
//-Migration Class Agent to MySQL Table
//-Persistence AgentTable for Agent (method:construct,load,save)