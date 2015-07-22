@extends('app')



@section('content')
<h1>Carica nuova immagine</h1>

@if($errors->any())
     <ul class="alert">
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach
     </ul>
 @endif

{!! Form::open(['route'=>['a.p.i.store', $product->id], 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}

    <div class="form-group">
     {!! Form::label('image','Image:') !!}
     {!! Form::file('image', null , ['class'=>'form-control']) !!}
    </div>
     
     <div class="form-group">
         {!! Form::submit('Carica immagine', ['class'=>'btn btn-primary']) !!}
     </div>

{!! Form::close() !!}

@endsection