<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tutorial0710Controller extends Controller
{
    function formview() {
        return view('tutorial0710.form');
    }

    function processform(Request $request) {
        return view('tutorial0710.processform')->with([
            'name' => $request->name,
            'email' => $request->email
        ]);
    }

    function formviewguru99() {
        return view('tutorial0710.formguru99');
    }

    function processformguru99(Request $request) {
        return view('tutorial0710.processformguru99')->with([

        ]);
    }
}
