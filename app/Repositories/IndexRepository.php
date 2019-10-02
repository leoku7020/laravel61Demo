<?php

namespace App\Repositories;

use App\User;

class IndexRepository
{
    public function getFirstUserName()
    {
        return User::cursor()->first()->name;
    }
}
