<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function showUser()
    {
        $users = User::select('users.name', 'users.email')->get();
        $json = [
            'message' => 'berhasil',
            'data' => $users,
            'status' => 200,
        ];
        return response()->json($json);
    }
}
