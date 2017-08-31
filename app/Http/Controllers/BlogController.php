<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use Session;
use DB;

class BlogController extends Controller
{
    //
    public function getSingle($slug)
    {
      $post=Post::where('slug','=',$slug)->first();


    //  return $post->title;
        return view('postovi.single')->withPost($post);

    }

    public function getPretraga(Request $request)
    {
    //  $post=Post::('post','=',)


    $pretraga=$request->search;


    $post=DB::table('posts')
    ->where('post','LIKE','%'.$pretraga.'%')
    ->orWhere('title','LIKE','%'.$pretraga.'%')
    ->get();


    //return view('postovi.search')->withSearch($post);


    if(count($post) > 0)
        {return view('postovi.search')->withSearch($post);

        }
    else  {
        Session::flash('pretraga','Uspijesno pronadjen');
       return redirect()->route('home')->withMessage('Nema trazene pretrage!');
    }





    }



    public function getSearch(Request $request){
    $category = $request->input('text');

    //now get all user and services in one go without looping using eager loading
    //In your foreach() loop, if you have 1000 users you will make 1000 queries

    $post = Post::with('services', function($query) use ($category) {
         $query->where('category', 'LIKE', '%' . $category . '%');
    })->get();

    return redirect('postovi.search')->withSearch($post);
}



}
