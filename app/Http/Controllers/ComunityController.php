<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunity;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\chatmodel;
use Illuminate\Support\Facades\Artisan;



class ComunityController extends Controller
{
    public function create(Request $req){
        $req->validate([
            'type' => 'nullable|string|in:school,work,personal',
            'nome' => 'string|max:50'


        ]);

if(Auth::check()){
    $adminName = Auth::user()->name;

}
Comunity::create([
            'nome' => $req->nome,
            'type' => $req->type,
            'admin' => $adminName
        ]);

        $code = Comunity::latest()->value('code');



        return redirect()->route('comunity-template', ['code' => $code]);

    }

    public function getComunity($code){

        $name = Comunity::where('code', $code)->value('nome');
        $typof = Comunity::where('code', $code)->value('type');
        
        return view('comunities/comunity-template', [
    'comunityName'=> $name,
    'typof' => $typof,
    'code' => $code
    ]);

    }

public function routeMaintain(Request $req, $code){
        $routename = $req->route()->getName();
        $ComunityName = Comunity::where('code', $code)->value('nome');



    return view("comunities/$routename", [
        'ComunityName' => $ComunityName,
        'code' => $code
    ]);

}


    public function showProfile(Request $req){

        $id = $req->query('id');
        $profileName = User::latest()->value('name');


        return view('main', [
            'profileName' => $profileName,
            'id' => $id
        ]);
    }

    public function chatpost(Request $req, $code){
        $message = $req->input('message');
        $ComunityName = Comunity::where('code', $code)->value('nome');


if(Auth::check()){
            $sendby = Auth::user()->name;


            return view('response', [
                'message' => $message,
                'sendby' => $sendby,
                'ComunityName' => $ComunityName
            ]);

            // chatmodel::post([
            //     'message' => $message,
            //     'sendby' => $sendby,
            //     'comunityName' => $ComunityName
            // ]);

        } else{
            return response()->json(['error' => 'no user nigaaaa'], 401); 
        }

    }
    public function codeinput(Request $req){
        $code = $req->input('ComunityId');

        return redirect()->route('comunity-template', [
            'code' => $code
        ]);
    }

}