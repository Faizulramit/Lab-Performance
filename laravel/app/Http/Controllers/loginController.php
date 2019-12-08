<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		
		//$users = User::all();
		$employee = employee::where('username', $request->username)
					->where('password', $request->password)
					->first();

		//$users = DB::table('users')->get();
	/*	$user = DB::table('users')->where('username', $request->username)
					->where('password', $request->password)
					->get();*/

		if(count($employee) > 0){
			$request->session()->put('uname', $request->input('username'));
			//$req->session()->put('user', $user[0]->type);
			//$req->session()->put('user', $user->type);
			$request->session()->put('user', $employee);

			return redirect()->route('home.index');
		}else{

			$request->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect()->route('login.index');
		}
	}
}


