<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');
    }

    public function index() {
        return view('auth.admin-login');
    }
    
    public function login(Request $request) {

        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        

        $credentials = [ 'email'    => $request->email,  
                         'password' => $request->password ];
        
        $authOk = Auth::guard('admin')->attempt($credentials, $request->remember);

        if ($authOk) {
            return redirect()->intended(route('admin.dashboard'));
        }
        
        return redirect()->back()->withInput($request->only('email','remember'));
        // relembrando novamente as infos de login :)
    }
}
