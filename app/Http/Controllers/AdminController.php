<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        if (Auth::id()) {
            $role = Auth()->user()->role;

            if($role == 'admin'){
                return view('admin.index');
            } else if($role == 'user'){
                return view ('home.index');
            }
        }
    }
}
