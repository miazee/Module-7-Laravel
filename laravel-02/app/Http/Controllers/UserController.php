<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello(){
        return "<h1>Hello, Laravel! </h1>";
    }
}
