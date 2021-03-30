@extends('master.main')
@section('content')

    @component('components.products.products-list', ['products' => $products])
    @endcomponent

@endsection
