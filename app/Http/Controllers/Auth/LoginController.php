<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {

        return view('auth.login');

    }

    public function store(Request $request)
    {

        session(['alert' => __('welcome')]);

        // ???????
        return redirect()->route('post.index');
    }
}
