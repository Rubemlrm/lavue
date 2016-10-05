<?php

namespace App\Repositores\Contracts;

interface RoleRepositoryInterface
{
    /**
     * Search role by id
     *
     * @param  integer $id role id
     * @return Role object
     */
    public function find($id);

}
