@extends('master.main')

@section('content')

    @component('components.projects.project-form-edit', ['project' => $project])
    @endcomponent

@endsection
