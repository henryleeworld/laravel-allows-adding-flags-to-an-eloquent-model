<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show() 
    {
        $flag = 'has tested';
        $user = User::findOrFail(1);
        echo __('The user sets the flag') . PHP_EOL;
        $user->flag($flag);
        echo __('Does the user have the flag: ') . ($user->hasFlag($flag) ? __('Yes') : __('No')) . PHP_EOL;
        echo __('The user removed the flag') . PHP_EOL;
        $user->unflag($flag);
        echo __('Does the user have the flag: ') . ($user->hasFlag($flag) ? __('Yes') : __('No')) . PHP_EOL;
    }
}
