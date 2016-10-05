<?php

namespace App\Repositores\Contracts;

interface LoggerRepositoryInterface
{
    /**
     * Search log by id
     *
     * @param  integer $id log id
     * @return logger object
     */
    public function find($id);

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

}
