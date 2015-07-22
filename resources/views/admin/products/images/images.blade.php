@extends('app')



@section('content')
<h1>Sezione amministrativa {{ $product->name }}</h1>

<a href="{{ route('a.p.i.create', ['id'=>$product->id]) }}" class="btn btn-success">Crea nuova immagine</a><br /><br />
 
<table class="table">
     <tr>
        <td>ID</td>
        <td>Image</td>
        <td>Estensione</td>
        <td>Modifica</td>
     </tr>
     @foreach($product->images as $image)
     <tr>
         <td>{{$image->id}}</td>
         <td>
            <img src="{{ url('upload/'.$image->id.'.'.$image->extension) }}" width="80" />
         </td>
         <td>{{$image->extension}}</td>
         <td>
             <a href="{{route('a.p.i.destroy',['id'=>$image->id])}}" class="btn btn-danger">Cancella</a>
         </td>
     </tr>
     @endforeach
 </table>
 <a href="{{ route('a.p.index') }}" class="btn btn-default">Torna</a>


@endsection