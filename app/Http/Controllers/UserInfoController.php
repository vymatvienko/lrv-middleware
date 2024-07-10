<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('authinfo.index', ['user' => $user]);
    }
}
