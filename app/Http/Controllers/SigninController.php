<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;


class SigninController extends Controller
{
    //
	public function signin(Request $request)
	{
		//dd('Our own Auth!'. $request->input('email'));
		$this->validate($request,[
			'email' => 'required|email',
			'password' =>  'required'
		]);

		if(Auth::attempt([
			'email'=>$request->input('email'),
			'password'=>$request->input('password')
		], $request->has('remember')))
		{
			return redirect()->route('admin.index');
			//return redirect('/admin');
		}
		return redirect()->back()->with('fail', "Authentication failed");
	}
}
