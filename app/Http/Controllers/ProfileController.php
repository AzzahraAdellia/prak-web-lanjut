<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = ''){

        $data = [
            'nama' => $nama,
            'kelas' => 'B',
            'npm' => '2117010010'
        ];

        return view('profile', $data);
    }
}
