@extends('app')



@section('content')
<h1>Modifica prodotto selezionato</h1>

@if($errors->any())
     <ul class="alert">
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach
     </ul>
 @endif

{!! Form::model($product, ['route'=>['a.p.update', $product->id], 'method'=>'put']) !!}

    @include('admin.products._form')
     
     <div class="form-group">
         {!! Form::submit('Salva modifiche', ['class'=>'btn btn-primary']) !!}
     </div>

{!! Form::close() !!}

@endsection