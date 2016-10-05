<?php

namespace App\Repositores\Contracts;

interface UserRepositoryInterface
{
    /**
     * Search user by id
     *
     * @param  integer $id user id
     * @return User object
     */
    public function find($id);

    /**
     * get seo fields of user
     *
     * @param  string email user email
     * @return User object
     */
    public function getByEmail($email);

    /**
     * get user role based on relation with roles table
     * @param  integer $id user id
     * @return string role name
     */
    public function getUserRole($id);

    /**
     * get all users with given role id
     * @param  integer $role role id for search
     * @return User    object with all users that match this request
     */
    public function getUsersByRole($role);
}
