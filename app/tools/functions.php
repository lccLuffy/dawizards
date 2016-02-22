<?php
use App\User;

/**
 * Created by PhpStorm.
 * User: lcc_luffy
 * Date: 2016/2/22
 * Time: 18:45
 */

function isAdmin(User $user)
{
    if (in_array($user->stu_num, config('dawizards.admin'))) {
        return true;
    }
    return false;
}