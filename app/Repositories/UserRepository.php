<?php

namespace App\Repositores;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    /**
     * Search user by id
     *
     * @param  integer $id user id
     * @return User object
     */
    public function find($id)
    {
        return $this->user->find($id);
    }

    /**
     * get seo fields of user
     *
     * @param  string email user email
     * @return User object
     */
    public function getByEmail($email)
    {
        return $this->user->where(['email' => $email])->first();
    }

    /**
     * get user role based on relation with roles table
     * @param  integer $id user id
     * @return string role name
     */
    public function getUserRole($id)
    {
        throw new \Exception('Method not implemented');
    }

    /**
     * get all users with given role id
     * @param  integer $role role id for search
     * @return User    object with all users that match this request
     */
    public function getUsersByRole($role)
    {
        return $this->user->where(['role_id' => $role])->get();
    }
}
