<?php

namespace App\Repositores;

use App\Models\User;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Repository;

class UserRepository extends Repository implements UserRepositoryInterface
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
        $this->model = new \App\Models\User;
    }

    /**
     * Specify Model class name
     * @return mixed
     */
    public function model()
    {
        return '\App\Models\User';
    }

    /**
     * get seo fields of user
     *
     * @param  string email user email
     * @return User object
     */
    public function getByEmail($email)
    {
        return $this->model->where(['email' => $email])->first();
    }

    /**
     * get user role based on relation with roles table
     * @param  integer $id user id
     * @return string role name
     */
    public function getUserRole($id)
    {
        return $this->model->where(['id' => $id])->role()->first();
    }

    /**
     * get all users with given role id
     * @param  integer $role role id for search
     * @return User    object with all users that match this request
     */
    public function getUsersByRole($role)
    {
        return $this->model->where(['role_id' => $role])->get();
    }
}
