<?php

namespace App\Http\Controllers;

use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;

class DetailController extends Controller
{
   
    public function index($id,$slug){
       $postdetail=Post::with('tag','user')->findOrFail($id);
       $postdefaut=Post::with('tag')->where([
        ['tag_id',$postdetail->tag_id],
        ['id','<>',$id]
       ])->get();
       $posts_new=Post::query()->where('tin_moi','like','on')->get();
    //    dd($postdefaut);
    $post_popular=Post::with('tag')->where('tin_noi_bat', 'like', 'on')->limit(4)->orderByDesc('id')->get();

       $tags=Tag::withCount('posts')->get();
       $menus = Tag::with('posts')->get();
       $banners = Post::with('tag')->where('tin_moi', 'like', 'on')->limit(4)->get();


       return view('client.detail.detailPosts',compact('postdetail','tags','postdefaut','posts_new','menus','banners','post_popular'));
    }
}
