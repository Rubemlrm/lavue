<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Contracts\LoggerRepositoryInterface;
use App\Repositories\Repository;
use App\Models\Logger;

class LoggerRepository extends Repository implements LoggerRepositoryInterface
{
    /**
     * model variable
     * @var Model
     */
    protected $model;

    /**
     * class construct;
     */
    public function __construct()
    {
        $this->model = $this->model();
        parent::__construct();
    }

    /**
     * define class model
     * @return model
     */
    public function model()
    {
        return App\Models\Logger::class;
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
        return $this->model->where(['controller' => $controller]);
    }

    /**
     * get all logs for the given level
     * @param  string $level log level for search
     * @return Logger    object with all logs that match this request
     */
    public function getLogsByLevel($level)
    {
        return $this->model->where(['level' => $level]);
    }
}
