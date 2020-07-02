<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function data_table(){
        return view('data_table');
    }
}
