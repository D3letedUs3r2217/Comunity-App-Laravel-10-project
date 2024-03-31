<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function save(Request $request){

        $request->validate([
            'gender' => 'nullable|string|in:Homem,Mulher',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender
        ]);

        Auth::login($user);
        return redirect()->route('main.route');
    }

    public function showAll(){

        User::all();
    }

}
