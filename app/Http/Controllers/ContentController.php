<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'url' => ['required'],
        ]);

        Content::create([
            'name' => $request->name,
            'url' => $request->url,
        ]);

        return back();


    }
}
