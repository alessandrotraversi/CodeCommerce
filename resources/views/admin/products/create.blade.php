@extends('app')



@section('content')
<h1>Crea nuovo prodotto</h1>

@if($errors->any())
     <ul class="alert">
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach
     </ul>
 @endif

{!! Form::open(['route'=>'a.p.store', 'method'=>'post']) !!}

     @include('admin.products._form')
     
     <div class="form-group">
         {!! Form::submit('Crea prodotto', ['class'=>'btn btn-primary']) !!}
     </div>

{!! Form::close() !!}

@endsection