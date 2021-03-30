@extends('master.main')

@section('content')

    @component('components.products.product-form-edit',
        ['product' => $product, 'categories' => $categories, 'projects' => $projects])
    @endcomponent

@endsection
