<?php

namespace App\Repositories;

use App\Models\Logger;
use App\Repositories\Contracts\LoggerRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Repository;

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
        $this->model = new \App\Models\Logger;
    }

    /**
     * define class model
     * @return model
     */
    public function model()
    {
        return 'App\Models\Logger';
    }

 /**
     * get all logs for the given level
     * @param  string $level log level for search
     * @return Logger    object with all logs that match this request
     */
    public function getLogsByLevel($level)
    {
        return $this->model->where('level', '=', $level);
    }

    /**
     * get all logs for the given controller
     * @param  string $controller log controller for search
     * @return Logger    object with all logs that match this request
     */
    public function getLogsByController($controller)
    {
        return $this->model->where('controller', '=', $controller);
    }

    /**
     * get stats by type of controller or level
     * @param  string $type controller / level
     * @param  string $value condition for search
     * @return Logger
    */
    public function getStatsByType($type, $value)
    {
        return $this->model->where('controller', '=', $value)->groupBy($type)->count();
    }
}
