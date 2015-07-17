@extends('app')



@section('content')
<h1>Sezione amministrativa</h1>

<a href="{{route('a.p.create')}}" class="btn btn-success">Crea nuovo prodotto</a><br /><br />
 
<table class="table">
     <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Modifica</td>
     </tr>
     @foreach($products as $product)
     <tr>
         <td>{{$product->id}}</td>
         <td>{{$product->name}}</td>
         <td>
             <a href="{{route('a.p.edit',['id'=>$product->id])}}" class="btn btn-default">Modifica</a>
             <a href="{{route('a.p.destroy',['id'=>$product->id])}}" class="btn btn-danger">Cancella</a>
         </td>
     </tr>
     @endforeach
 </table>

{!! $products->render() !!}

@endsection