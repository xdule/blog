
@extends('sadrzaj')

@section('content')

<h1>Rezultati vaseg pretrazivanja : </h1>
  @foreach($search as $post)
<div class="panel panel-primary" style="width:80%;margin:auto;margin-top:10px;">
  <div class="panel-body">
{{$post->title}}

  </div>
  <div class="panel-footer">
    {{$post->post}}

  </div>
</div>

@endforeach




@endsection
@section('babo')
<li ><a href="/blog/public">Home <span class="sr-only">(current)</span></a></li>

<li class='active'><a href="about">About</a></li>
@endsection
@section('title','|  Rezultati')
