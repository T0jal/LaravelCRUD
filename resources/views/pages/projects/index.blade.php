@extends('master.main')
@section('content')

    @component('components.projects.projects-list', ['projects' => $projects])
    @endcomponent

@endsection
