<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserGame;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dangnhap(){

        return view('user.dangnhap');
    }

    public function dangky(){
        return view('user.dangky');
    }
    
    public function dangky_post(){
        request()->validate([
            'username' => 'required|max:20|unique:usergame',
            'name'=>'required|max:255',
            'phonenumber'=> 'required|min:10|max:10',
            'password' => 'required|min:6|max:255',
            'confirmpass' => 'required|min:6|max:255|same:password',
        ]);
        UserGame::create([
            'username'=>request('username'),
            'name'=>request('name'),
            'phonenumber'=>request('phonenumber'),
            'password'=>Hash::make(request('password')),
            'type' => '0'
        ]);
        return redirect()->route('dangnhap');
    }

    public function dangnhapUser(Request $req){
        request()->validate([
            'password' => 'required|min:6|max:255',
        ]);

        if(Auth::attempt(['username'=> $req->username, 'password'=> $req->password])){
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('fail','Thông tin không chính xác!');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('index');
    }
}
