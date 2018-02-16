<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware(function ($request,$next) {
//            view()->share('user', $request->user());
//
////            return $next($request);
//            return $request->user();
//        });
//    }

//    public function showUser(){
//      $value = $this->loggedInUser();
//
//    }
//
//
//    protected function loggedInUser(){
//        return User::find(session('user_id'));
//    }

public function showUser(){
    $loggedInUser=Auth::user()->email;
//    $userOnSession=session($loggedInUser);
    $userOnSessions= view()->share('user', $loggedInUser);
    return compact('userOnSessions');
}
}

