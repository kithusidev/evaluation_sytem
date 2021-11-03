<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    public function login(){
        return view('auth.login');

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
                return redirect('dashboard');

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
        return view('dashboard',compact('data')); }
        public function logout(){
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login');

            }
        }
}
