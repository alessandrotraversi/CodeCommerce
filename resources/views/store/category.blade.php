@extends('store.store')

@section('categories')
@include('store.partial.categories')
@stop

@section('content')
    <div class="features_items"><!--recommended-->
        <h2 class="title text-center">Categoria {{ $category->name }}</h2>

        @include('store.partial.product', [])

    </div>
    <!--recommended-->

</div>
@stop