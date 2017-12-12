<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();

        flash('Your account has been created successfully', 'success');

        return $this->postSignin($request);

        //return redirect()->route('shop.index');
    }

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            flash('Login Successful', 'success');
            return redirect()->route('user.profile');
        }
        flash('Invalid Credentials Provided', 'danger');
        return redirect()->back();
    }

    public function getProfile()
    {
        $user = User::find(Auth::id());
        return view('user.profile', compact('user'));
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('shop.index');
    }
}
