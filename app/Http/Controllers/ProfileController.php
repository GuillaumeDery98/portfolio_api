<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Link;


class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile')
            ->with('user', Auth::user())
            ->with('links', Link::query()->get());
    }

    public function update(Request $request)
    {
        Auth::user()->update($request->toArray());
        return redirect()->back();
    }



    public function files(Request $request)
    {
        $fileType = $request->get('fileType');
        $file = $request->file('file');

        if ($fileType == "picture") {
            $filename = 'picture' . '.' . $file->getClientOriginalExtension();
        } elseif ($fileType == "cv") {
            $filename = 'cv' . '.' . $file->getClientOriginalExtension();
        }
        if (isset($filename)) {

            $path = $file->storeAs('public/profile', $filename);

            Auth::user()->update([$fileType => 'profile/' . $filename]);
        }

        return redirect()->back();
    }
}
