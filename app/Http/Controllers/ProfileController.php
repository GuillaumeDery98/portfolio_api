<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile')->with('user', Auth::user());
    }

    public function update(Request $request)
    {
        Auth::user()->update($request->toArray());
        return redirect()->back();
    }
}
