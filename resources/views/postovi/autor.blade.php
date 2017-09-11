
@extends('sadrzaj')

@section('content')









<h1 style='color:grey;opacity:0.5;'>Autor Xdule bloga : </h1>


<img class="img-circle" src="images/CB.jpg" style='margin:auto'>



@endsection
@section('babo')
<li ><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

<li class='active'><a href="{{route('about')}}">About</a></li>
@endsection
@section('title','|  Autor Xdule Bloga')
