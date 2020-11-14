<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('guest:admin');
    }

    public function login(Request $request) {
        return true;
    }

    public function index() {
        return view('admin');
    }
}