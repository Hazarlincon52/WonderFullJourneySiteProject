<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

use App\Article;
use App\User;
use App\Category;

class admin extends Controller
{
    public function admincontrol(){
        $auth = Auth::check();
        $show = User::where('role','=','admin')->get();
        return view('/admincontrol',['user'=>$show,'auth'=>$auth]);
    }

    public function usercontrol(){
        $auth = Auth::check();
        $show = User::where('role','=','user')->get();
        return view('/usercontrol',['user'=>$show,'auth'=>$auth]);
    }

    public function deleteuser($id){

        $userid = Article::where('user_id','=',"$id")->get();

        foreach($userid as $u){
        $file = Article::find($u->id);
        $filename = $file->image;
        File::delete(public_path()."/image/$filename");

        $u->delete();
        }

        $del = User::find($id);
        $del->delete();

        return redirect()->back();
    }
}
