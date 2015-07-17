@extends('app')



@section('content')
<h1>Modifica categoria selezionato</h1>

@if($errors->any())
     <ul class="alert">
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach
     </ul>
 @endif

{!! Form::model($category, ['route'=>['a.c.update', $category->id], 'method'=>'put']) !!}

    @include('admin.categories._form')
     
     <div class="form-group">
         {!! Form::submit('Salva modifiche', ['class'=>'btn btn-primary']) !!}
     </div>

{!! Form::close() !!}

@endsection