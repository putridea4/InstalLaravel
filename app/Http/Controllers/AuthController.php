<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119149,
            "Name" => "Putri Dea Apriliana",
            "Gender" => "Female",
            "Phone" => 6281327654615,
            "Class" => "XII RPL 5"
        ];
    }

}