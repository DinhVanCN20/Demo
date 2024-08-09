<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(Request $request){
        $items = DB::table('news')
        ->join('categories', 'news.category_id', '=', 'categories.id')
        ->select('categories.category_name as type',
                'news.id',
                'news.category_id',
                'news.title',
                'news.image',
                'news.description',
                'news.created_at'
        )
        ->orderBy('news.created_at', 'desc')
        ->get();
        
        return view('tintuc.index', compact('items'));
    }

    public function tintuc() {
        $user['info'] = Auth::user()->username;
        $items = DB::table('news')
        ->join('categories', 'news.category_id', '=', 'categories.id')
        ->select('categories.category_name as type',
                'news.id',
                'news.category_id',
                'news.title',
                'news.image',
                'news.description',
                'news.created_at'
        )
        ->orderBy('news.created_at', 'desc')
        ->get();
        
        return view('tintuc.tintuc', $user, compact('items'));
    }

    public function sukien() {
        $user['info'] = Auth::user()->username;
        $items = DB::table('news')
        ->join('categories', 'news.category_id', '=', 'categories.id')
        ->select('categories.category_name as type',
                'news.id',
                'news.category_id',
                'news.title',
                'news.image',
                'news.description',
                'news.created_at'
        )
        ->orderBy('news.created_at', 'desc')
        ->get();
        
        return view('tintuc.sukien', $user, compact('items'));
    }
}
