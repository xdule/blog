<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Post;
use DB;
class PageController extends Controller
{
    public function getWelecome()
    {
    //  $post=Post::orderBy('created_at','desc')->limit(5)->get();
  //    $kok=DB::table('posts')->where('id','=',2)->get();


  // Get the currently authenticated user...
  $user = Auth::user();
$post=Post::orderBy('created_at','desc')->paginate(5);

      return view('welcome')->withPosts($post)->withUser($user)->withMessage('');
    }
    public function getAbout()
    {
        $user = Auth::user();
      return view('about')->withUser($user);


    }
    public function getKreiranje()
    {
        $user = Auth::user();
      return view('postovi.kreiraj')->withUser($user);


    }
    public function getIndex()
    {
        $user = Auth::user();
      return view('postovi.index')->withUser($user);


    }
    public function getAutor()
    {
      

      return view('postovi.autor');
    }


}




 ?>
