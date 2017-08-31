
@extends('sadrzaj')

@section('content')

<h1>Vas upravo kreirani post je : </h1>
<div class="panel panel-primary" style="width:80%;margin:auto;">
  <div class="panel-body">
    {{$post->title}}

  </div>
  <div class="panel-footer">
    {{$post->post}}

  </div>
</div>







@endsection
@section('babo')
<li ><a href="/blog/public">Home <span class="sr-only">(current)</span></a></li>

<li class='active'><a href="about">About</a></li>
@endsection
@section('title','|  Vas najnoviji post')
