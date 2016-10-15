<?php

namespace App\Repositories\Contracts;

interface LoggerRepositoryInterface
{
    /**
     * get all logs for the given level
     * @param  string $level log level for search
     * @return Logger    object with all logs that match this request
     */
    public function getLogsByLevel($level);

     /**
     * get all logs for the given controller
     * @param  string $controller log controller for search
     * @return Logger    object with all logs that match this request
     */
    public function getLogsByController($controller);

    /**
     * get stats by type of controller or level
     * @param  string $type controller / level
     * @param  string $value condition for search
     * @return Logger
     */
    public function getStatsByType($type, $value);
}
