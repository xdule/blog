@extends('sadrzaj')

@section('content')




<div class="container">
  <h2>Zdravo {{$user->name}}</h2>
<a class="btn btn-lg btn-block btn-primary btn-h1-spacing" href="{{route('posts.create')}}" role="button">Unesite novi post</a>

  <div class="container">
    <h2>Svi postovi</h2>
    <p>Ovdje imate pristup svim postovima kojima mozete pristupiti editovati i sl.: </p>
    <table class="table">
      <thead>
        <tr>
          <th>RB</th>
          <th>Naslov</th>
          <th>Tijelo bloga</th>
          <th>Datum kreiranja</th>
        </tr>
      </thead>
      <tbody>


        @foreach($posts as $post)
        <tr>
          <td>{{$loop->index+1}}</td>
          <td>{{$post->title}}</td>
          <td>{{substr($post->post,0,50)}}{{strlen($post->post) > 50 ? "..." : ""}}</td>
          <td>{{$post->created_at}}</td>
          <td>

            {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) }}
            {{ Form::submit('Izbrisi',['class'=>'btn btn-danger']) }}
            {{ Form::close() }}

            <a href="{{route('posts.edit',['id'=>$post->id])}}"class='btn btn-default'>Edit</a>
            <a href="{{route('blog.single',$post->slug)}}"class='btn btn-default'>View</a>

          </td>

        </tr>

        @endforeach


      </tbody>
    </table>
   <!--
   <div class="text-center">

    </div>
-->
  </div>



</div>


@endsection

@section('babo')
<li ><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

<li ><a href="{{route('about')}}">About</a></li>
@endsection
@section('title','|  Upravljanje postovima')
