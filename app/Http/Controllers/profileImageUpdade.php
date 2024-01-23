<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profileImageUpdade extends Controller
{
    public function store(Request $request)
    {
        $path = $request->file('ava')->store('images', 'public');

        return response()->json([
            'code' => 200,
            'login' => $request['login'],
            'password' => $request['password'],
            'ava' => $path,
        ]);
    }
}
