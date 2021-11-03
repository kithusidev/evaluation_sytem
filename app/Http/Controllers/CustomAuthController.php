<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function calender(){
        $data=array();
    if(Session::has('loginId')){
        $data=user:: where('id','=',Session::get('loginId'))->first();
    }
        return view('users.calender',compact('data'));
    }

    public function loginhod(){
        return view('auth.loghod');

    }
    public function loginadmin(){
        return view('auth.logadmin');

    }
    public function loginlec(){
        return view('auth.loglecturer');

    }
    public function registration(){
        return view('auth.registration');

    }
    public function registerUser(Request $request){
    $request->validate([
        'name'=>'required',
        'Email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12',
    ]);
    $user=new user();
    $user->name=$request->name;
    $user->Email=$request->Email;
    $user->password=Hash::make($request->password);
    $rel=$user->save();
    if($rel){
        return back()->with('success','registered successfully');

    }
    else{
        return back()->with('fail','something went wrong');

    }

    }
    public function loginuser(Request $request){
        $request->validate([
            'Email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user=user:: where('Email','=',$request->Email)->first();
        if($user){

            if(Hash::check($request->password,$user->password)){
                $request->Session()->put('loginId',$user->id);
                return redirect('student');

            }
            else{
                return back()->with('fail','incorrect password');
            }
        }
        else{
            return back()->with('fail','this email is not registerd');

        }
    }
    public function loghod(Request $request){
        $request->validate([
            'Email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user=user:: where('Email','=',$request->Email)->first();
        if($user){

            if(Hash::check($request->password,$user->password)){
                $request->Session()->put('loginId',$user->id);
                return redirect('hod');
            }
            else{
                return back()->with('fail','incorrect password');
            }
        }
        else{
            return back()->with('fail','this email is not registerd');

        }
    }
    public function loglec(Request $request){
        $request->validate([
            'Email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user=user:: where('Email','=',$request->Email)->first();
        if($user){

            if(Hash::check($request->password,$user->password)){
                $request->Session()->put('loginId',$user->id);
                return redirect('lecturer');
            }
            else{
                return back()->with('fail','incorrect password');
            }
        }
        else{
            return back()->with('fail','this email is not registerd');

        }
    }
    public function logadmin(Request $request){
        $request->validate([
            'Email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user=user:: where('Email','=',$request->Email)->first();
        if($user){

            if(Hash::check($request->password,$user->password)){
                $request->Session()->put('loginId',$user->id);
                return redirect('admin');
            }
            else{
                return back()->with('fail','incorrect password');
            }
        }
        else{
            return back()->with('fail','this email is not registerd');

        }
    }
    
    
    public function dashboard(){
        $data=array();
        if(Session::has('loginId')){
            $data=user:: where('id','=',Session::get('loginId'))->first();

        }
        return view('users.index',compact('data')); 
    }
        public function hod(){
            $data=array();
            if(Session::has('loginId')){
                $data=user:: where('id','=',Session::get('loginId'))->first();
    
            }
            else{
                return redirect('login-hod');
            }
            return view('hod.index',compact('data')); }
            public function lec(){
                $data=array();
                if(Session::has('loginId')){
                    $data=user:: where('id','=',Session::get('loginId'))->first();
        
                }
                else{
                    return redirect('login-lec');
                }
                return view('lecturer.index',compact('data')); }
                public function admin(){
                    $data=array();
                    if(Session::has('loginId')){
                        $data=user:: where('id','=',Session::get('loginId'))->first();
            
                    }
                    else{
                        return redirect('login-admin');
                    }
                    return view('admin.index',compact('data')); }
        public function logout(){
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login');

            }
        }
        public function logouthod(){
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login-hod');

            }
        }
        public function logoutadmin(){
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login-admin');

            }
        }
        public function logoutlec(){
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login-lec');

            }
        }
}

