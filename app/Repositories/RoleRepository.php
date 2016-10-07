<?php

namespace \App\Repositories;

use \App\Repositories\Contracts\RoleRepositoryInterface;
use \App\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{

    protected $role;

    /**
     * @param Role $role
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * Search role by id
     *
     * @param  integer $id role id
     * @return Role object
     */
    public function find($id)
    {
        return $this->role->find($id);
    }
}
