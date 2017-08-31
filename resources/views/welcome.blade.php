
@extends('sadrzaj')

@section('content')


@foreach($posts as $post)


{{--<div class="panel panel-primary" style="width:80%;margin:auto;margin-top:5px;">
  <div class="panel-body">
    {{$post->title}}

  </div>
  <div class="panel-footer">{{substr($post->post,0,50)}}{{strlen($post->post) > 50 ? "..." : ""}}</div>
</div>
--}}

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>{{$post->title}}
      <h5>Objavljeno: {{date('j M, Y',strtotime($post->created_at))}}          Autor:{{$post->user->name}}</h5>
      <p>{{substr($post->post,0,350)}}{{strlen($post->post) > 350 ? "..." : ""}}</p>

      <a href="{{route('blog.single',$post->slug)}}">Citaj vise</a>
  </div>
</div>





@endforeach


<div class="text-center">
  {!!$posts->links(); !!}
</div>




@endsection

@section('babo')
<li class='active'><a href="/blog/public">Home <span class="sr-only">(current)</span></a></li>

<li><a href="about">About</a></li>
@endsection

@section('title','|  Naslovna')
