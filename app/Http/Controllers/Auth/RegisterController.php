<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {

        return view('auth.register');
    }
//    public function create()
//    {
//        $user = User::query()->latest()->get();
//
//        return view('auth.index')->with('users',$user);
//
//    }

    public function store(Request $request)
    {
        session(['store' => __('Create')]);
        $validated = $request->validate([
            'name' => ['required', 'string',],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        User::query()->create($validated);


        return redirect()->route('post.index');


    }
}
