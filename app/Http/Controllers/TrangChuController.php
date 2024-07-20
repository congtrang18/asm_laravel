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
        $posts = Post::with('tag', 'user')->get();
        $post_tin = Post::query()->where([
            ['tin_noi_bat', 'like', 'on'],
            ['tin_moi', 'like', 'on']

        ])->get();
        $posts_new = Post::with('tag')->where('tin_moi', 'like', 'on')->get();
        $post_popular=Post::with('tag')->where('tin_noi_bat', 'like', 'on')->limit(4)->orderByDesc('id')->get();
        $banners = Post::with('tag', 'user')->where('tin_moi', 'like', 'on')->limit(4)->get();

        $menus = Tag::with('posts')->get();
        // dd($menus->toArray());


        return view('index', compact('tags', 'posts', 'post_tin', 'posts_new', 'banners', 'menus','post_popular'));
    }
    public function find()
    {
        $posts_new = Post::with('tag')->where('tin_moi', 'like', 'on')->get();
        $tags = Tag::withCount('posts')->get();
        $banners = Post::with('tag', 'user')->where('tin_moi', 'like', 'on')->limit(4)->get();
        $post_popular=Post::with('tag')->where('tin_noi_bat', 'like', 'on')->limit(4)->orderByDesc('id')->get();

        $menus = Tag::with('posts')->get();
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            $findpost = Post::query()->with('tag', 'user')->where('tieu_de', 'like', "%$name%")->get();
            $ket_qua='kết quả bạn tìm được';
            return view('client.find.find', compact('posts_new', 'menus', 'banners', 'tags', 'findpost','post_popular','ket_qua'));
        }
    }
}
