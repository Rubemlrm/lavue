<?php

namespace App\Repositories;

use App\Repositories\Contracts\RoleRepositoryInterface;
use App\Models\Role;

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
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->role->get($columns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->role->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data) {
        return $this->role->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->role->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->role->destroy($id);
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
