@extends('master.main')

@section('content')

    @component('components.projects.project-form-show', ['project' => $project])
    @endcomponent

@endsection
