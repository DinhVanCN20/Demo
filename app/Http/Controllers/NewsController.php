<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index(Request $request){
        // $user['info'] = Auth::user()->username;
        $posts = News::orderBy('created_at', 'desc')->get();
        $data = ['posts' => $posts];
        
        return view('tintuc.index',$data);
    }

    public function tintuc() {
        $user['info'] = Auth::user()->username;
        $posts = News::orderBy('created_at', 'desc')->get();
        $data = ['posts' => $posts];
        
        return view('tintuc.tintuc',$data, $user);
    }
}
