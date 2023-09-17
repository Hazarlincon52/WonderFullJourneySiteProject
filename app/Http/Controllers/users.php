<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use App\Article;
use App\User;
use App\Category;

class users extends Controller
{
    public function index(){
        $show = Article::all();
        $auth = Auth::check();
        $check = NULL;
        return view('/home',['article'=>$show,'auth'=>$auth],compact('check'));
    }

    public function sort($id){
        $auth = Auth::check();
        $show = Article::where('category_id','=',"$id")->get();
        $show1 = Category::where('id','=',"$id")->get();
        $check = 1;
        return view('/home',['category'=>$show1,'article'=>$show,'auth'=>$auth],compact('check'));
    }


    public function description($id){
        $auth = Auth::check();
        $show = Article::find($id);
        return view('/description',['article'=>$show,'auth'=>$auth]);
    }


    public function aboutus(){
        $auth = Auth::check();
        return view('/aboutus',['auth'=>$auth]);
    }

    public function signup(){
        $auth = Auth::check();
        return view('/signup',['auth'=>$auth]);
    }

    public function insertsignup(Request $request){
        
        $this->validate($request,
        [
        'name'=>'required|unique:App\User,name',
        'email'=>'required|email|unique:App\User,email',
        'phone'=>'required|numeric',
        'password' => 'required|min:5',
        'repassword' => 'required|same:password',
        ],
        [
        'name.required' => 'Name must not empty!',
        'name.unique' => 'Name already taken!',
        'phone.required' => 'Phone must not empty!',
        'phone.numeric' => 'Phone must be number!',
        'email.required' => 'Email must not empty!',
        'email.email' => 'Email must be an email form!',
        'email.unique' => 'Email already taken!',
        'password.required' => 'Password must not empty!',
        'password.min' => 'Password must be at least 6 character!',
        'repassword.required' => 'Confirm Password must not empty!',
        'repassword.same' => 'Confirm Password is not as same as Password!'
        ]
        );  
            $pass = request('password');
            $hash = Hash::make($pass);

            $insert = new \App\User();

            $insert->name = request('name');
            $insert->email = request('email');
            $insert->password = $hash;
            $insert->phone = request('phone');
            $insert->role = 'user';
    
            $insert->save();
            return redirect('/');
    }

    public function login(){
        $auth = Auth::check();
        return view('/login',['auth'=>$auth]);
    }

    public function insertlogin(Request $request){
        $auth = Auth::check();
        $login = $request->only('email','password');
        $role = request('role');

        $this->validate($request,
        [
            'email'=>'required|email',
            'password' => 'required',
            
        ],
        [
            'email.required'=>'Email must not empty!',
            'email.email'=>'Email must be an email form!',
            'password.required' => 'Password must not empty!',
            
        ]
        );

        if(Auth::Attempt($login)){
            return view('/enter',['auth'=>true]);
        }
        
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function profil($id){
        $auth = Auth::check();
        return view('/profil',['auth'=>$auth]);
    }

    public function update(Request $request){
        $auth = Auth::check();
        $id = Auth::User()->id;

        $this->validate($request,
        [
        'name'=>'required|unique:App\User,name,'. $id,
        'email'=>'required|email|unique:App\User,email,'. $id,
        'phone'=>'required|numeric'
        ],
        [
        'name.required' => 'Name must not empty!',
        'name.unique' => 'Name already taken!',
        'phone.required' => 'Phone must not empty!',
        'phone.numeric' => 'Phone must be number!',
        'email.required' => 'Email must not empty!',
        'email.email' => 'Email must be an email form!',
        'email.unique' => 'Email already taken!',
        ]);

        DB::table('users')->where('id','=',"$id")->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);


        return redirect("/profil/$id");
    }

    public function blog($id){
        $auth = Auth::check();
        $count = Article::where('user_id','=',"$id")->count();
        $show = Article::where('user_id','=',"$id")->get();
        
        return view('/blog',['article'=>$show,'auth'=>$auth],compact('count'));
    }

    public function delete($id){
        $file = Article::find($id);
        $filename = $file->image;
        File::delete(public_path()."/image/$filename");

        $delete = Article::find($id);
        $delete->delete();

        return redirect()->back();
    }

    public function create(){
        $auth = Auth::check();
        $show = Category::all();
        return view('/create_blog',['category'=>$show,'auth'=>$auth]);
    }

    public function insertcreate(Request $request){
        $auth = Auth::check();
        $id = Auth::User()->id;
        
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/image', $filename);

        $insert = new \App\Article();

        $insert->title = request('title');
        $insert->user_id = $id;
        $insert->category_id = request('category');
        $insert->image = $filename;
        $insert->description = request('story');
    
        $insert->save();

        $show = Article::where('user_id','=',"$id")->get();
        $count = Article::where('user_id','=',"$id")->count();
        return view('/blog',['article'=>$show,'auth'=>$auth],compact('count'));
    }

    
}
