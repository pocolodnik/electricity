<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.01.19
 * Time: 21:06
 */

namespace Electricity\Model\Agent\Controller;


use Electricity\Model\Agent\Agent;
use Electricity\Services\ControllerInterface;

class AgentNew implements ControllerInterface
{
    // TODO: Implement execute() method.

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
        \Katzgrau\KLogger\Logger $logger
    )
    {
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
            $template = \Electricity\Services\DiContainer::getInstance()->make("Electricity\Services\TwigTemplate");
            return $template->render('AgentNew.html',[]);

        } catch (\Electricity\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}