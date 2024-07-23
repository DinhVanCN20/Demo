<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserGame;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Admin extends Controller
{
    public function admin() {
    
            return view('admin.admin');
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

        // $post = new News();

        // $rows = $post->all();
        // $data['rows']= $rows;

        $posts = News::orderBy('created_at', 'desc')->get();
        $data = ['posts' => $posts];
        
        return view('admin.index', $data, $user);
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
        $user->type = $request->type;
        $user->save();
        return redirect('/test/editUser/'.$id)->with('thongbao', 'Sửa thông tin thành công!');
    }

    //xóa user
    public function deleteUser($id){
        $user = UserGame::find($id);
        $user->delete();
        return redirect()->route('list')->with('success','Xóa thành công');
    }

    //thêm tin tức mới
    public function test_add(Request $req) {
        $user['info'] = Auth::user()->username;
        if ($req->method() == 'POST'){
            $post = new News();

            // validate dữ liệu đầu vào
            $validated = $req -> validate([
                'title' => 'required',
                'file' => 'required|image',
                'description' => 'required|max:200',
                'content' =>'required'
            ]);
            // đường dẫn lưu ảnh vào file public/uploads
            $path = $req->file('file')->store('/',['disk' =>'my_disk']);

            // lưu dữ liệu vào bảng news
            $data['title'] = $req->input('title');
            $data['image'] = $path;
            $data['description'] = $req->input('description');
            $data['content'] = $req->input('content');
            $data['created_at'] = date("Y-m-d");
            $data['updated_at'] = date("Y-m-d");
            
            $post->insert($data);
        }
        return view('admin.index-add',$user);
    }

    public function test_edit(Request $req, $id ='') {
        $post_edit = new News();
        
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
            $data['title'] = $req->input('title');
            $data['description'] = $req->input('description');
            $data['content'] = $req->input('content');
            $data['updated_at'] = date("Y-m-d");
            
            $post_edit->where('id',$id)->update($data);
            return redirect('test/edit/' . $id);
        }
        $row = $post_edit->find($id);
        return view('admin.admin-post-edit',['row' => $row]);
    }

    public function post_delete(Request $req, $id ='') {
        $post_delete = new News();
        $row = $post_delete->find($id);
        if ($req->method() == 'POST'){
            $row->delete();
            return redirect('test');
        }
        return view('admin.admin-post-delete',['row' => $row]);
    }
}