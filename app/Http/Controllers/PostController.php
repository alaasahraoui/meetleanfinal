<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use   App\Post ;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       $posts=Post::all(); 
       return view('posts.index')->withPosts($posts);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    return view('posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
 $this->validate($request,array('title'=>'required|max:255',
                                                      'body'=>'required'

    ));
 $post =new Post; 
$post->title=$request->title ; 
$post->body=$request->body ; 
$post->save(); 

$file = $request->file('image');

$path = $file->getPathName();
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
// $base64 = 'http://localhost/' . $type . ';base64,' . base64_encode($data);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
 $post->image= $base64;
 
//return redirect()->route('posts.show',$post->id); 

return view('posts.show')->with('post',$post);



            }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=Post::find($id); 
      return view('posts.show')->with('post',$post); 
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
}
