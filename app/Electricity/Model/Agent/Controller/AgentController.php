<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.01.19
 * Time: 5:01
 */

namespace Electricity\Model\Agent\Controller;


use Electricity\Model\Agent\Agent;
use Electricity\Services\ControllerInterface;
use Electricity\Services\Persistence\NotFoundExeption;
use Electricity\Services\Logger;

class AgentController implements ControllerInterface
{


    /**
     * @param $request
     * @param $response
     * @return string|Agent
     */
    public function execute($request, $response)
    {
        // TODO: Implement Execute() method.

        $agent = new Agent('');

        try{$agent->getPersistence()->load($request->id);

        }catch (NotFoundExeption $e){
            Logger::getLogger()->debug($e->getMessage(),$e->getTrace());
            return "Sorry, the agent not found";

        }catch (\Exception $e){
            Logger::getLogger()->debug($e->getMessage(),$e->getTrace());
            return "Oops, something went wrong, our team looking for solution";
        }

        return print_r($agent,true);
    }
}