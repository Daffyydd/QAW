<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function register(Request $request){
        $user =User::create({
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        })

        $response['status'] =1
        $response['Message']= 'User registered Successfully'
        $response['code']=200

        return $response()->Json($response);        
    }
}