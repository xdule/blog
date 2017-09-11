
@extends('sadrzaj')

@section('content')

<h1>Vas post je : </h1>
<div class="panel panel-primary" style="width:80%;margin:auto;">
  <div class="panel-body">
    {{$post->title}}[{{$post->user->name}}]

  </div>
  <div class="panel-footer">
    {{$post->post}}


  </div>
</div>


  <h2>Vratite se na ostale postove:</h2>
<a class="btn btn-lg btn-block btn-primary btn-h1-spacing" href="{{route('posts.index')}}" role="button">Nazad</a>




@endsection
@section('babo')
<li ><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

<li class='active'><a href="{{route('about')}}">About</a></li>
@endsection
@section('title','|  Vas najnoviji post')
