@extends('sadrzaj')

@section('content')




<div class="container">

  {!!Html::style('css/parsley.css')!!}
  {!!Html::script('js/myjquery.js')!!}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
{!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}



    {{Form::text('title',null,["class"=>"form-control input-lg",'required'=>''])}}
    {{Form::text('slug',null,["class"=>"form-control input-lg","style"=>"margin-top:10px",'regexp'=>'([A-z])\w','min'=>'6'])}}
    {{form::textarea('post',null,['class'=>'form-control',"style"=>"margin-top:10px",'required'=>''])}}

    {{Form::submit('Snimi Promjene',['class'=>'btn btn-success',"style"=>"margin-top:10px"])}}




{!!Form::close()!!}

{!!Html::script('js/parsley.min.js')!!}
</div>


@endsection

@section('babo')
<li ><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

<li ><a href="{{route('about')}}">About</a></li>
@endsection
@section('title','|  Upravljanje postovima')
