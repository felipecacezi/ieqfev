<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class RepertoryPolicy
{
    public static function isSuperUser(User $user)
    {
        if ($user->type == 'S' || $user->type == 'A') {
            return true;
        } else {
            return false;
        }
    }
}
