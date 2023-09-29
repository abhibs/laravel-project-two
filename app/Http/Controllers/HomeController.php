<?php

namespace App\Http\Controllers;

use App\Models\Name;
use App\Models\Photo;
use App\Models\Role;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = Name::find(1);
        $photo = Photo::find(1);
        $roles = Role::where('status', 1)->latest()->get();
        $socials = Social::where('status', 1)->get();

        return view('welcome', compact('name', 'photo', 'roles', 'socials'));
    }
}
