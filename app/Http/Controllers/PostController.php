<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use Session;
use DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
      //  $posts=Post::paginate(10);
      $user=Auth::user();
          $posts=DB::table('posts')->where('user_id','=',Auth::id())->get();

        return view('postovi.index')->withPosts($posts)->withUser($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postovi.kreiraj');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
          'title'=>'required|max:255',
          'slug'=>'required|min:5|alpha_dash|max:50|unique:posts,slug',
          'tijelo'=>'required'

        ));
        $post = new Post;
        $post->title=$request->title;
        $post->slug=$request->slug;
        $post->post=$request->tijelo;
      //    $sero = Auth::user();
        $post->user_id=Auth::id();
        $post->save();

        Session::flash('uspjeh',$post->id);


        return redirect()->route('posts.show', $post->id);
        //return view('welcome');
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




        return view('postovi.show')->with('post',$post);
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
        $post=Post::find($id);

        return view('postovi.edit')->withPost($post);
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
        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->slug=$request->input('slug');
        $post->post=$request->input('post');

        $post->save();
        Session::flash('uspjeh',$post->id);

        return redirect()->route('posts.show', $post->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
