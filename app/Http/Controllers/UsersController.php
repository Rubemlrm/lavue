<?php

namespace App\Http\Controllers;

/**
 *
 * Class UsersController
 * @package Lavue
 * @subpackage Controllers
 * @author  Rubem Mota rubemmota89@gmail.com
 * @version 1.0
 * @copyright 2016 Rubem Mota
 */

use App\Http\Requests;
use App\Http\Requests\UserFormRequest;
use App\Repositories\UserRepositorypository;
use Illuminate\Http\Request;

/**
 * Users Controller for api crud actions
 */
class UsersController extends Controller
{

    /**
     * Return information of all users
     * @param  UserRepository $users object that stores user repository
     * @return array   list of all users and them properties
     */
    public function index(UserRepository $users)
    {

        return $users->all()->toArray();
    }

    /**
     * save new user into database
     * @param  UserFormRequest $request validate input fields to check if all is good
     * @param  UserRepository  $user    object that stores user repository
     * @todo changed the info that returns to vue
     * @return mixed
     */
    public function store(UserFormRequest $request, UserRepository $user)
    {
        //get input information
        $data = $request->only('email', 'name', 'role_id');
        $data['password'] = bcrypt($request->get('password'));

        //validate user creation
        if ($user->create($data)) {
            return json_encode("true");
        }

        return json_encode("false");
    }

    /**
     * Display user information based on given user id
     * @param  userRepository $user [description]
     * @return array
     */
    public function show(userRepository $user)
    {
        //to implement
    }

    /**
     * Update user information based on given data
     * @param  UserFormRequest $request validate input fields to check if all is good
     * @param  userRepository $user object that stores user repository
     * @return mixed
     */
    public function update(UserFormRequest $request, UserRepository $user)
    {
        //to implement
    }

    /**
     * delete user information from database
     * @param  userRepository $user object that stores user repository
     * @return boolean  return a status of true or false based on destroy action
     */
    public function destroy(userRepository $user)
    {
        //to implement
    }
}
