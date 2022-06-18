<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function show($id)
    {
        return response()->json(User::where('id', $id)->first());
    }
}
