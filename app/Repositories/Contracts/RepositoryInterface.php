<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*'));

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id");

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Search role by id
     *
     * @param  integer $id role id
     * @return Role object
     */
    public function find($id);
}
