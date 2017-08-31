@extends('sadrzaj')

@section('content')




<div class="container">
{!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}



    {{Form::text('title',null,["class"=>"form-control input-lg"])}}
    {{Form::text('slug',null,["class"=>"form-control input-lg","style"=>"margin-top:10px"])}}
    {{form::textarea('post',null,['class'=>'form-control',"style"=>"margin-top:10px"])}}

    {{Form::submit('Snimi Promjene',['class'=>'btn btn-success',"style"=>"margin-top:10px"])}}




{!!Form::close()!!}
</div>


@endsection

@section('babo')
<li ><a href="/blog/public">Home <span class="sr-only">(current)</span></a></li>

<li ><a href="about">About</a></li>
@endsection
@section('title','|  Upravljanje postovima')
