<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $userSesion = Auth::user();

        if ($userSesion->admin !== 1){
            return redirect()->back();
        }
        
        $postlist = Post::all();
                    
        $posts = Post::with('reports')->get();
        return view('admin.dashboard',[
            "postlist" => $postlist
        ]);
    }

    public function indexUser(){
        $userSesion = Auth::user();

        if ($userSesion->admin !== 1){
            return redirect()->back();
        }
        
        $userlist = User::all();
                    
        $users = User::with('reports')->get();
        return view('admin.user-dashboard',[
            "userlist" => $userlist
        ]);
    }

    public function showPosts(User $user){
        $userSesion = Auth::user();

        if ($userSesion->admin !== 1){
            return redirect()->back();
        }

        $postlist = Post::where('user_id', $user->id)->with('reports')->get();
        return view('admin.dashboard',[
            "postlist" => $postlist,
            "user" => $user
        ]);
    }

    public function showReports(User $user){
        $userSesion = Auth::user();

        if ($userSesion->admin !== 1){
            return redirect()->back();
        }

        $reportlist = Report::where('user_id', $user->id)->with('post')->get();
        return view('admin.report-dashboard',[
            "reportlist" => $reportlist,
            "user" => $user
        ]);
    }
}
