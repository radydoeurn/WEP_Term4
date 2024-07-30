<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return "Welcome to the Client Page!";
    }
    public function isClient(){
        return "Hey, I'm a client";
    }
}
