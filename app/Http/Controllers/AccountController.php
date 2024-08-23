<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function registration()
    {
      return view('front.account.registration');

    }

    public function processRegistration(Request $request)
    {
      $validator = Validator::make($request->all(),[

        'name' =>'required',
        'email' =>'reqired|email',
        'password' =>'required',
        'confirm_password' =>'required'
      ]);
      if($validator->passes())
      {
        $user =new User();
      }
    }

    public function login()
    {
      return view('front.account.login');
        
    }
}
