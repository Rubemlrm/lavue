<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\UserRepository;

class UsersController extends Controller
{
    public function index(UserRepository $users)
    {

        return $users->all()->toArray();
    }
}
