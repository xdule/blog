@extends('sadrzaj')

@section('content')




<div class="container">
  <h2>Unesite novi post</h2>

{!!Html::script('js/parsley.min.js')!!}
{!!Html::style('css/parsley.css')!!}


@if(Session::has('kreiranje'))

<div class="alert alert-danger" role="alert">
<strong>Ups!</strong> Moras zadovoljit validaciju. Popuni sva polja i Link mora se sastojati od alfanumerckih vrj. i donje crte i slug more biti jedinstven
</div>

@endif




  {!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}
    {{Form::label('title', 'Naslov') }}
    {{ Form::text('title',null, array('class' => 'form-control','required'=>'')) }}

    {{Form::label('slug', 'Link') }}
    {{ Form::text('slug',null, array('class' => 'form-control','required'=>'','regexp'=>'\w+','minlength'=>'6')) }}


    {{Form::label('tijelo','Tijelo Bloga:')}}
    {{Form::textarea('tijelo',null, array('class' => 'form-control','required'=>'')) }}

    {{Form::submit('Submitaj',array('class' => 'btn btn-success btn-lg btn-block ','style'=>'margin-top:20px;'))}}



  {!! Form::close() !!}




</div>


@endsection

@section('babo')
<li ><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

<li ><a href="{{route('about')}}">About</a></li>
@endsection
@section('title','|  O nama')
