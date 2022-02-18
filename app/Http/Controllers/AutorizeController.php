<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorizeController extends Controller
{
    public function index()
    {
        return view($view = 'news/autorize');
    }
}
