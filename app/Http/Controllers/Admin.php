<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\UserGame;
use App\Models\News;
use DOMDocument;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Admin extends Controller
{
    public function admin() {
        if (Auth::check() && Auth::user()->type == 1) {
            return redirect('test');
        } else {
            return view('admin.admin');
        }
    }
    //Đăng nhập admin
    public function adminLogin(Request $request) {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['username'=> $request->username, 'password'=> $request->password])){
            return redirect('test');
        } else {
            return redirect()->back()->with('fail','Thông tin không chính xác!');
        }
    }

    public function signup() {
        return view('admin.admin-signup');
    }
    
    // xử lý đăng ký người dùng admin
    public function signup_post() {
        // validate dữ liệu đầu vào
        request()->validate([
            'username' => 'required|unique:usergame',
            'password' => 'required|max:255',
            'confirmpass' => 'required|max:255|same:password',
        ]);

        UserGame::create([
            'username'=>request('username'),
            'password'=>Hash::make(request('password')),
            'type' => '1'
        ]);
        return redirect('admin');
    }

    //xử lý đăng xuất người dùng admin
    public function logout() {
        Auth::logout();
        return redirect('admin');
    }

    //hiển thị danh sách tin tức
    public function test(){
        $user['info'] = Auth::user()->username;
        
        // $posts = News::orderBy('created_at', 'desc')->get();
        // $data = ['posts' => $posts];

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

        return view('admin.index', $user, compact('items'));
    }

    //danh sách user
    public function post_list(){
        $user['info'] = Auth::user()->username;
        $post = UserGame::all();
        return view('admin.admin-list-user', ['user'=>$post], $user);
    }

    //edit user
    public function editUser($id){
        $post = UserGame::find($id);
        $ad['info'] = Auth::user()->username;
        return view('admin.admin-edit-user', ['user'=>$post], $ad);
    }

    public function editUser_post(Request $request, $id){
        $user = UserGame::find($id);
        $user->name = $request->name;
        $user->type = $request->type;
        $user->phonenumber = $request->phonenumber;
        $user->save();
        toastr()->success('Sửa thông tin user thành công!');
        return redirect('/test/editUser/'.$id);
    }

    //xóa user
    public function deleteUser($id){
        $user = UserGame::find($id);
        $user->delete();
        toastr()->success('Đã xoá user!');
        return redirect()->route('list');
    }

    //thêm tin tức và sự kiện mới
    public function test_add(Request $req) {
        $user['info'] = Auth::user()->username;
        if ($req->method() == 'POST'){
            $post = new News();

            // validate dữ liệu đầu vào
            $validated = $req -> validate([
                'type' => 'required',
                'title' => 'required',
                'file' => 'required|image',
                'description' => 'required|max:200',
                'content' =>'required'
            ]);
            
            // đường dẫn lưu ảnh vào file public/uploads
            $path = $req->file('file')->store('/',['disk' =>'my_disk']);

            // lưu dữ liệu vào bảng news
            $data['category_id'] = $req -> input('type');
            $data['title'] = $req->input('title');
            $data['image'] = $path;
            $data['description'] = $req->input('description');
            $data['content'] = $req->input('content');
            $data['created_at'] = date("Y-m-d");
            $data['updated_at'] = date("Y-m-d");
            
            $post->insert($data);
            toastr()->success('Thêm thành công!');
        }
        return view('admin.index-add',$user);
    }

    //sửa tin tức và sự kiện
    public function test_edit(Request $req, $id ='') {
        $post_edit = new News();
        $user['info'] = Auth::user()->username;
        
        if ($req->method() == 'POST'){
            // validate dữ liệu đầu vào
            $validated = $req -> validate([
                'description' => 'max:200',
            ]);
            // đường dẫn lưu ảnh vào file public/uploads
            if($req->file('file')){
                $oldrow = $post_edit->find($id);
                if(file_exists('uploads/'.$oldrow->image)){
                    unlink('uploads/'.$oldrow->image);
                }
                $path = $req->file('file')->store('/',['disk' =>'my_disk']);
                $data['image'] = $path;
            }
            
            // lưu dữ liệu vào bảng news
            $data['category_id'] = $req->input('type');
            $data['title'] = $req->input('title');
            $data['description'] = $req->input('description');
            $data['content'] = $req->input('content');
            $data['updated_at'] = date("Y-m-d");
            
            $post_edit->where('id',$id)->update($data);
            toastr()->success('Sửa thành công!');
            return redirect('test/edit/' . $id);
        }
        $row = $post_edit->find($id);
        return view('admin.admin-post-edit1',['row' => $row], $user);
    }

    //xoá tin tức và sự kiện
    public function post_delete(Request $req, $id ='') {
        $user['info'] = Auth::user()->username;
        $post_delete = new News();
        $row = $post_delete->find($id);
        if ($req->method() == 'POST'){
            $row->delete();
            toastr()->success('Đã xoá thành công!');
            return redirect('test');
        }
        return view('admin.admin-post-delete1',['row' => $row], $user);
    }
}
