<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customauth;
use Session;
use Hash;

class customauthC extends Controller
{
    public function registeration()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function registerU(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customauths',
            "password"=>'required|min:6',
        ]);

        $data=new customauth();
        $data->name=$request->get('name');
        $data->email=$request->get('email');
        $data->password=Hash::make($request->get('password'));
        $result=$data->save();
        if($result){
            return back()->with('success','Registered Successfully');
        }else{
            return back()->with('fail','Something Wrong');
        }
    }

    public function loginU(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $data=customauth::where('email','=',$request->get('email'))->first();
        if($data){
            if(Hash::check($request->get('password'),$data->password)){
                $request->session()->put('userid',$data);
                return redirect('dashboard');
            }else{
                return back()->with('fail','password Do not match');
            }

        }else{
            return back()->with('fail','This email is not registered');

        }
    }
    public function logout()
    {
        if(session::has('userid')){
            session::pull('userid');
        return redirect('login');
        }
    }


}

