@extends('master.main')

@section('content')

    @component('components.categories.category-form-show', ['category' => $category])
    @endcomponent

@endsection
