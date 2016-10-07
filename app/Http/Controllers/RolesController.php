<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Contracts\RoleRepositoryInterface;

class RolesController extends Controller
{
    public function index(RoleRepositoryInterface $roles)
    {
        return json_encode($roles->get());
    }
}
