<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Contracts\RoleRepository;

class RolesController extends Controller
{
    public function index(RoleRepository $roles)
    {

        return json_encode($roles->all());
    }
}