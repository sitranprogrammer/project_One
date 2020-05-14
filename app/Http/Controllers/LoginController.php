<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
	public function index(){
 		return view('auth.login');
    }
    public function login(Request $request){
 		$data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if(Auth::attempt($data)){
            switch (Auth::user()->role) {
                case 0:
                    Auth::logout();
                    return redirect()->route('ShowLogin');
                    break;
                case 1:
                    return redirect('quan-tri/dash-board');
                    break;
                case 2:
                    return redirect('quan-tri/dash-board');
                    break;
                
                default:
                    # code...
                    break;
            }
        }else{
            return redirect()->route('ShowLogin');
        }	
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
