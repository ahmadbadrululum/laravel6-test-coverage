<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    // get a specific user
    public function getUserById($id)
    {
        return User::findOrFail($id);
    }
}
