<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class GetUser extends Controller
{
    public function index()
    {
        $users = Users::all(['id_user', 'loggin', 'password']);
        $res = [];
        foreach ($users as $value) {
            $res[$value["id_user"]] = [
                "loggin" => $value["loggin"],
                "password" => $value["password"],
            ];
        }
        return response()->json($res);
    }
}