<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\User\UserQueries;

class UserController extends Controller
{
    public function getUserWithCompany()
    {
        $users = (new UserQueries())->run();
        return $users;
    }
}
