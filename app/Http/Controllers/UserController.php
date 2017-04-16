<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Storage;
use File;

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

    public function postAccount(Request $request)
    {
        $this->validate($request, [
            'frist_name'   => 'required',
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->frist_name = $request['frist_name'];
        $user->save();
        $file = $request->file('image');
        $file_name = $user->frist_name . '-' . $user->id . '.jpg';
        if ($file) {
            Storage::disk('local')->put($file_name, File::get($file));
        }
        return redirect()->back()->with(['message' => 'data updated']);

    }

    public function getImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return $file;
    }

}
