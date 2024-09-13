<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('create_user');
    }

    public function store(Request $request){
        $data = [
            'nama' => $request->nama,
            'npm' => $request->npm
        ];

        return view('profile', $data);
    }
}
