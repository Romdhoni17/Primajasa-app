<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('umum.login');
    }

     public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username', 'password')))
        {
            if(Auth::user()->level == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->level == 'pengurus') {
                return redirect('admin');
            } elseif (Auth::user()->level == 'user') {
                return redirect('dashboard-user');
            } else {
                return redirect('/');
            }
        }

        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
