<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show() 
    {
        $flag = 'has tested';
        $user = User::findOrFail(1);
        echo '使用者設定旗標' . PHP_EOL;
        $user->flag($flag);
        echo '使用者是否有旗標：' . ($user->hasFlag($flag) ? '是' : '否') . PHP_EOL;
        echo '使用者移除旗標' . PHP_EOL;
        $user->unflag($flag);
        echo '使用者是否有旗標：' . ($user->hasFlag($flag) ? '是' : '否') . PHP_EOL;
    }
}
