<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserGame;
use Illuminate\Support\Facades\Hash;

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
            'phonenumber'=> 'required|min:10|max:10',
            'password' => 'required|min:6|max:255',
        ]);

        $user = UserGame::where('username', '=', $req->username)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                $req->session()->put('loginId', $user->id);
                    return redirect()->route('index');
            }else{
                return back()->with('fail', 'Mật khẩu không đúng');
            }
        } else{
            return back()->with('fail', 'Không tìm thấy tên tài khoản');
        }
    }
}
