<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.01.19
 * Time: 2:26
 */

namespace Electricity\Model\Agent\Controller;


use Electricity\Model\Agent\Agent;
use Electricity\Services\ControllerInterface;

class AgentEdit implements ControllerInterface
{
    /**
     * @var Agent
     */
    private $agent;

    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;

    /**
     * View constructor.
     * @param Agent $agent
     * @param \Katzgrau\KLogger\Logger $logger
     */
    public function __construct(
        Agent $agent,
        \Katzgrau\KLogger\Logger $logger
    )
    {
        $this->agent = $agent;
        $this->logger = $logger;
    }

    /**
     * @param $request
     * @param $response
     * @return mixed|string
     * @throws \Exception
     */
    public function execute($request, $response)
    {
        try {
            $this->agent->getPersistence()->load($request->id);


            $template = \Electricity\Services\DiContainer::getInstance()->make("Electricity\Services\TwigTemplate");
            return $template->render('AgentEdit.html',['agent' => $this->agent]);


//            return print_r($this->agent, true);
        } catch (NotFoundException $e) {

            Logger::getLogger()->debug($e->getMessage(),$e->getTrace());
            return "Sorry, the product not found";

        } catch (\Electricity\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}