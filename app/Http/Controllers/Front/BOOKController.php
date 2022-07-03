<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BOOKController extends Controller
{
    //
    public function getIndex() {
        return view('view', 'welcome');
    }
}
