<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $user = Auth::user();
        
        $postlist = Post::all();
                    

        return view('admin.dashboard',[
            'postlist' => $postlist,
        ]);
    }
}
