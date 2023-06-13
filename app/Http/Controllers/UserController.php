<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UserController extends Controller{

   public function sucessoUser(){
    return view('users.sucesso_users');
   }

    public function loginUser(){     
    return view('users.login_users');

   }

   public function registo(){
    return view('users.registo_users');
   }

   public function indexPage(){
    return view('users.index_page');
   }

   

}
