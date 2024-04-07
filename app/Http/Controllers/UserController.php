<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function save(Request $request){

        $request->validate([
            'gender' => 'nullable|string|in:Homem,Mulher',
            'email' => 'required|email|unique:users,email|max:80'
        ]);

        $passwordOriginal = $request->password;
        $password = Hash::make($passwordOriginal);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'gender' => $request->gender,
            'uncryptedpass' => $passwordOriginal
        ]);

        Auth::login($user);

        $id = User::latest()->value('id');
        return redirect()->route('main.route', ['id' => $id]);
    }

    public function login(Request $req){
        $credentials = $req->only('email', 'password');
        $email = $req->input('email');
        $id = User::where('email', $email)->value('id');

        if(Auth::attempt($credentials)){
            return redirect()->route('main.route', ['id' => $id]);
        } else{
            return redirect()->back()->withErrors(['email'=> 'dados inexistentes!']);
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function showAll(){

        User::all();
    }

}
