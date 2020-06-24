<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();

        //impaginazione 
        $posts = Post::orderBy('id', 'desc')->paginate(3);

        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dump($request);
       $request->validate([
        'title' => 'required',
        'description' => 'required',
        //'tags.*' => 'exists:tags, id'
       ]);
    
       $data = $request->all();
       
       //prendiamo l'id dell utente
       $data['user_id'] = 3; //<- aggiungo user_id all' array data
       
       //generiamo post slug
       $data['slug'] = Str::slug($data['title'], '-'); //<- aggiungo slug all' array data

       $newPost = new Post();
       $newPost->fill($data);
       $saved = $newPost->save();

       if ($saved) {
           if (! empty($data['tags'])) {
               $newPost->tags()->attach($data['tags']);
           }
           return redirect()->route('posts.show', $newPost->slug);
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug )->first();
        if (empty($post)) {
            abort(404);
        }
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function validation() {
    //     return [

    //     ]
    // }
}
