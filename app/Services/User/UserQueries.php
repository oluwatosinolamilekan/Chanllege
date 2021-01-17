<?php

namespace App\Services\User;

use App\Models\User;

class UserQueries
{
    public function run()
    {
        $users = User::has('companies')->get();
        return $users;
    }
}
