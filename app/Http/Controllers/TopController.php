<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TopController extends Controller
{
    public function index()
    {
        return view('top.index');
    }
}
