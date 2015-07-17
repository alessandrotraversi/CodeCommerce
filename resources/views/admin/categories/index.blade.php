@extends('app')



@section('content')
<h1>Sezione amministrativa</h1>

<a href="{{route('a.c.create')}}" class="btn btn-success">Crea nuova categoria</a><br /><br />
 
<table class="table">
     <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Modifica</td>
     </tr>
     @foreach($categories as $category)
     <tr>
         <td>{{$category->name}}</td>
         <td>{{$category->description}}</td>
         <td>
             <a href="{{route('a.c.edit',['id'=>$category->id])}}" class="btn btn-default">Edit</a>
             <a href="{{route('a.c.destroy',['id'=>$category->id])}}" class="btn btn-danger">Delete</a>
         </td>
     </tr>
     @endforeach
 </table>

{!! $categories->render() !!}

@endsection