@extends('master.main')

@section('content')

    @component('components.products.product-form-show', ['product' => $product])
    @endcomponent

@endsection
