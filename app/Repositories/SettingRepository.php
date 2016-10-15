<?php

namespace App\Repositories;

use App\Models\Setting;
use App\Repositores\Contracts\SettingRepositoryInterface;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Repository;

class SettingRepository extends Repository implements SettingRepositoryInterface
{
    /**
     * model variable
     * @var Model
     */
    protected $model;

    /**
     * class construct
     */
    public function __construct()
    {
        $this->model = new \App\Models\Setting;
    }

    /**
     * Specify Model class name
     * @return mixed
     */
    public function model()
    {
        return '\App\Models\Setting';
    }
}
