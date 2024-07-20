<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
       return response()->json([
        'message'=>'ahshah'
       ]);
        $request->validate([
            'name'=>'required',
            'email'=>"required|email",
            'password'=>"required|min:5"
            
        ],[
            'name.required'=>'tên bắt buộc phải nhập',
            'email.required'=>'bắt buộc phải nhập',
            'password.required'=>'bắt buộc phải nhập mật khẩu'
        ]);
        
       $url="";
        if ($request->hasFile('avatar')) {
            $path=Storage::putFile('public/image',$request->avatar);
            $url=Storage::url($path);
        }
        User::query()->create([
            'name'=>$request->name,
            'sdt'=>$request->sdt,
            'email'=>$request->email,
            'password'=>$request->password,
            'avatar'=>$url,



        ]);
        // return redirect()->route('trangchu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
