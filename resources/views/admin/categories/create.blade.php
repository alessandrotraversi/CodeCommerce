@extends('app')



@section('content')
<h1>Crea nuova Categoria</h1>

@if($errors->any())
     <ul class="alert">
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach
     </ul>
 @endif

{!! Form::open(['route'=>'a.c.store', 'method'=>'post']) !!}

    <div class="form-group ">
    {!! Form::label('tags', 'Tag:') !!}
    {!! Form::text('tags', $tags, ['class' => 'form-control']) !!}

    </div>

     @include('admin.categories._form')
     
     <div class="form-group">
         {!! Form::submit('Crea categoria', ['class'=>'btn btn-primary']) !!}
     </div>

{!! Form::close() !!}

@endsection