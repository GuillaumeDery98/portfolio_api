<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->toArray();
        $link = Link::query()->where('id', $data['id'])->first();
        unset($data['id']);
        $link->update($data);
        return redirect()->back();
    }

    public function store(Request $request)
    {
        Link::create($request->toArray());
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $id = $request->toArray()['id'];
        Link::find($id)->delete();
        return redirect()->back();
    }
}
