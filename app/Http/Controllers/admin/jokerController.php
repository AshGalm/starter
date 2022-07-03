<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jokerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('readjoker');
    // }
    //
    public function showJoker() {
        return '<h1>Access Joker Mode</h1>';
    }
    public function readjoker() {
        return '<h1>You can see that Very Well!</h1>';
    }
}
