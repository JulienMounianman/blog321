<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        $plop = 'super!';
        return view('user.index',['resultats'=>$plop]);
    }
}
