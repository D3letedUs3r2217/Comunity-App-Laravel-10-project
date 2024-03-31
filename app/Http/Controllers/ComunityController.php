<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunities;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ComunityController extends Controller
{
    public function create(Request $req){
        $req->validate([
            'type' => 'nullable|string|in:school,work,personal',
        ]);
    Comunities::create([
            'nome' => $req->nome,
            'type' => $req->type
        ]);

        $code = Comunities::latest()->value('code');

        return redirect()->route('home.page', ['code' => $code]);

    }

    public function getComunity($code){

        $name = Comunities::where('code', $code)->value('nome');
        $typof = Comunities::where('code', $code)->value('type');
        
        return view('comunities/comunity-template', [
    'comunityName'=> $name,
    'typof' => $typof,
    'code' => $code
    ]);

    }

public function routeMaintain(Request $req, $code){
        $routename = $req->route()->getName();
        $ComunityName = Comunities::where('code', $code)->value('nome');



    return view("comunities/$routename", [
        'ComunityName' => $ComunityName,
        'code' => $code
    ]);

}


    public function showProfile(){


        $profileName = User::latest()->value('name');

        return view('main', [
            'profileName' => $profileName
        ]);
    }

    public function chatpost(Request $req){
        $message = $req->input('message');
if(Auth::check()){
            $sendby = Auth::user()->name;
            return view('response', [
                'sendby'=> $sendby,
                'message' => $message
            ]); 
        } else{
            return response()->json(['error' => 'no user nigaaaa'], 401); 
        }

    }

    public function codeinput(Request $req){
        $code = $req->ComunityId;

        return redirect()->route('comunity-template', ['code'=> $code]);
    }

}