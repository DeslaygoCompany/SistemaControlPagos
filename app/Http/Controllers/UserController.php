<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\User;

class UserController extends Controller
{
    //
    
    public function validarUser(){
        $username= Input::get('username');
        
        $consulta = User::where('username',$username)->first();
        
        return response()->json($consulta);
    }
}
