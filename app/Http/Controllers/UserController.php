<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function postSignUp(Request $request)
    {

        $this->validate($request, [
            'email'         => 'required|unique:users|email',
            'frist_name'    => 'required|max:100',
            'password'      => 'required|min:4'
        ]);

        $email = $request['email'];
        $frist_name = $request['frist_name'];
        $password = bcrypt($request['password']);

        $user = new User();

        $user->email = $email;
        $user->frist_name = $frist_name;
        $user->password = $password;

        $user->save();

        return redirect()->route('dashboard');

    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email'         => 'required',
            'password'      => 'required'
        ]);
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('dashboard');
        }

        return redirect()->back();

    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function getAccount()
    {
        return view('account', ['user' => Auth::user()]);
    }

}
