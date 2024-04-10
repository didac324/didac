<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(int $user_id){
        //dd($user_id);

        return '<h1>Hola controlador!! Soc el id: '. $user_id .'</h1>';
    }

    //
}
