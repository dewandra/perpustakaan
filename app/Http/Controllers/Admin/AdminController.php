<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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
