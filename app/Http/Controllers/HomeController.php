<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = Name::find(1);
        return view('welcome', compact('name'));
    }
}
