<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    public function index(Request $request){
        return view('tintuc.index');
    }

    public function tintuc() {
        // $tintuc = new News();
        // $rows = $tintuc->all();
        // $data['rows']= $rows;
        $posts = News::orderBy('created_at', 'desc')->get();
        $data = ['posts' => $posts];
        
        return view('tintuc.tintuc',$data);
    }
}
