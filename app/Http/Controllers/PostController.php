<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $busqueda = $request->busqueda;
        $orden = $request->orden;
        
        if($orden === "Ordenar por" || $orden === null){
            $orden = "desc";
        };

        $postlist = Post::orderBy('updated_at', $orden)
                    ->where("category", "Busqueda")
                    ->where("content", "LIKE", "%".$busqueda."%")
                    ->paginate(15);

        return view('busqueda',[
            'postlist' => $postlist,
            "busqueda" => $busqueda,
            "user" => $user,
        ]);
    }

    public function index2(Request $request)
    {
        $user = Auth::user();
        $busqueda = $request->busqueda;
        $orden = $request->orden;
        if($orden === "Ordenar por" || $orden === null){
            $orden = "desc";
        };

        $postlist = Post::orderBy('updated_at', $orden)
                    ->where("category", "Adopcion")
                    ->where("content", "LIKE", "%".$busqueda."%")
                    ->paginate(15);

        return view('adopcion',[
            'postlist' => $postlist,
            "busqueda" => $busqueda,
            "user" => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("newpost");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $newPost = new Post();
        
        
        if( $request->hasFile('image') ) {
            $file = $request->file('image');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($destinationPath, $filename);
            $newPost->image = $destinationPath . $filename;
        }
        
        $newPost->user_id = $request->user_id;
        $newPost->content = $request->content;
        $newPost->category = $request->category;
            
        $newPost->save();
       
        return redirect('tus-posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // Obtener el usuario autenticado actualmente
        $user = Auth::user();
        $busqueda = $request->busqueda;
        $orden = $request->orden;
        if($orden === "Ordenar por" || $orden === null){
            $orden = "desc";
        };
        // Obtener las noticias del usuario actual
        $userPost = Post::where('user_id', $user->id)
                    ->orderBy('updated_at', $orden)
                    ->where("content", "LIKE", "%".$busqueda."%")
                    ->paginate(15);

        return view('selfpost', [
            'selfposts' => $userPost,
            "busqueda" => $busqueda,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            return back();
        }else{
        return view("editpost", [
            "post" => $post
        ]);
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        
        if( $request->hasFile('image') ) {
            $file = $request->file('image');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($destinationPath, $filename);
            $post->image = $destinationPath . $filename;
        }

        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();

        return to_route("post.self");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
