<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
   
    public function index(Request $request): View
    {



        return view('home.index', [
            'user' => $request->user(),
            'welcomeMessage' => 'Welcome to the Home Page!',
            'arr'   => [1, 2, 3, 4, 5]
        ]);
    }
}