<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.01.19
 * Time: 21:11
 */

namespace Electricity\Model\Agent\Controller;


use Electricity\Model\Agent\Agent;
use Electricity\Services\ControllerInterface;


class AgentSave implements ControllerInterface
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
            $this->agent->setName($request->paramsPost()->name);
            $this->agent->setStatus($request->paramsPost()->status);
            $this->agent->getPersistence()->save();
//            return $response->redirect("/agent/" . $this->agent->getId());
            return $response->redirect("/agent/");
        } catch (CantSaveException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Sorry, the product can't be saved";
        } catch (\Electricity\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}