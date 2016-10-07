<?php

namespace \App\Repositories;


use \App\Repositories\Contracts\LoggerRepositoryInterface;
use App\Models\Logger;

class LoggerRepository implements LoggerRepositoryInterface
{

    protected $logger;

    /**
     * @param Logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Search log by id
     *
     * @param  integer $id log id
     * @return logger object
     */
    public function find($id)
    {
        return $this->logger->find($id)->first();
    }

    /**
     * get all logs for the given level
     * @param  string $level log level for search
     * @return Logger    object with all logs that match this request
     */
    public function getLogsByLevel($level)
    {
        return $this->logger->where(['level' => $level]);
    }

    /**
     * get all logs for the given controller
     * @param  string $controller log controller for search
     * @return Logger    object with all logs that match this request
     */
    public function getLogsByController($controller)
    {
        return $this->logger->where(['controller' => $controller]);
    }
}
