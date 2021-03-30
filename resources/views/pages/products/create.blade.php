@extends('master.main')
@section('content')

    @component('components.products.product-form-create', ['projects' => $projects , 'categories' => $categories])
    @endcomponent

@endsection
