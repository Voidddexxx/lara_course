<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller {
    public function home() {
        return view('home', [
            'someVar' => mt_rand(1, 100),
        ]);
    }
}
