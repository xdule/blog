@extends('sadrzaj')

@section('content')




<div class="container">
  <h2>Unesite novi post</h2>
  {!! Form::open(['route' => 'posts.store']) !!}
    {{Form::label('title', 'Naslov') }}
    {{ Form::text('title',null, array('class' => 'form-control')) }}

    {{Form::label('slug', 'Naslov') }}
    {{ Form::text('slug',null, array('class' => 'form-control')) }}


    {{Form::label('tijelo','Tijelo Bloga:')}}
    {{Form::textarea('tijelo',null, array('class' => 'form-control')) }}

    {{Form::submit('Submitaj',array('class' => 'btn btn-success btn-lg btn-block ','style'=>'margin-top:20px;'))}}



  {!! Form::close() !!}




</div>


@endsection

@section('babo')
<li ><a href="/blog/public">Home <span class="sr-only">(current)</span></a></li>

<li ><a href="about">About</a></li>
@endsection
@section('title','|  O nama')
