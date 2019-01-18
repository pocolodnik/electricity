<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.01.19
 * Time: 18:30
 */

namespace Electricity\Services;


class Logger
{
    const LOG_PATH = DOCROOT .'/var/logs';
    /**
     * @param string $message
     */
    public static function logMessage($message)
    {
        $logger = new \Katzgrau\KLogger\Logger(self::LOG_PATH);

        $logger->info($message);
    }

    public static function getLogger()
    {
        return new \Katzgrau\KLogger\Logger(self::LOG_PATH);
    }

}