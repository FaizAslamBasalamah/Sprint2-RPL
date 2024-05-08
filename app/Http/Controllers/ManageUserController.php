<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ManageUserController extends Controller
{
    public function index()
    {
        $manage = User::all();
        return view('manageuser.index', compact('manage'));
    }
}
