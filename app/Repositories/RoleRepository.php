<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Repository;

class RoleRepository extends Repository
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
        $this->model = new \App\Models\Role;
    }

    /**
     * Specify Model class name
     * @return mixed
     */
    public function model()
    {
        return '\App\Models\Role';
    }
}
