<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Users\LoginRequest;
use App\Http\Requests\Users\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index(){
        return view('master');
    }

    public function getRegister()
    {
        return view('pages.users.register');
    }
    public function postRegister(RegisterRequest $request)
    {
        $input['name'] = $request->get('name');
        $input['email'] = $request->get('email');
        $input['password'] = $request->get('password');
        $input['password_confirmation'] = $request->get('password_confirmation');
        
        if($request->get('password') === $request->get('password_confirmation')){
            $user = User::create($input);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if($user->save()){
                return redirect()->route('getLogin');
            }else{
                return redirect()->route('getRegister');
            }
        }
    }
    public function getLogin()
    {
        return view('pages.users.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            // $request->session()->put('usersession', 
            // ['name' => $request->name, 'email' => $request->email, 'role_id' => $request->role_id]);
            return redirect('/home');
        }
        else
        {
            return redirect()->back()->with('message', 'Email or Password is incorrect!');
        }
    }

    public function getDashboard()
    {
        return view('layouts.dashboard');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

}
