<?php

namespace App\Http\Controllers;

/**
 *
 * Class RolesController
 * @package Lavue
 * @subpackage Controllers
 * @author  Rubem Mota rubemmota89@gmail.com
 * @version 1.0
 * @copyright 2016 Rubem Mota
 */

use App\Http\Requests;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

/**
 * Controller that handles all role crud operations for api
 */
class RolesController extends Controller
{
    /**
     * Return all roles information
     * @param  RoleRepository $roles object that stores roles repository
     * @return array   list of all roles
     */
    public function index(RoleRepository $roles) {
        return $roles->all(['id','name'])->toArray();
    
    }

}
