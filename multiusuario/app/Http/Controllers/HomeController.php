<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeControlller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }
}