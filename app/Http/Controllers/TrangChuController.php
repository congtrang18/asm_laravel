<?php

namespace App\Http\Controllers;

use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    //
    public function index()
    {
        $tags = Tag::withCount('posts')->get();
        $posts = Post::with('tag', 'user','comments')->get();
        $post_tin = Post::query()->where([
            ['tin_noi_bat', 'like', 'on'],
            ['tin_moi', 'like', 'on']

        ])->get();
        $tagslimit=Tag::query()->paginate(4);
        
        return view('index', compact( 'posts', 'post_tin','tags','tagslimit'));
    }
    public function find()
    {
        
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            $findpost = Post::query()->with('tag', 'user')->where('tieu_de', 'like', "%$name%")->get();
            $ket_qua='kết quả bạn tìm được';
            return view('client.find.find', compact('findpost','ket_qua'));
        }
    }
}
