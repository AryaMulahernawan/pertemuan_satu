<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class CobaController extends Controller
{
    public function index() {
        $users = User::all();
        
       // dd($users);
        
        return view('coba', [
            'users' => $users
        ]);
        
    }
}