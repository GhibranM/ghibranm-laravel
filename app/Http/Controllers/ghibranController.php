<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ghibran;

class ghibranController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function home(){
        return view('home');
    }
    public function komentar(){
        return view('komentar');
    }
}
