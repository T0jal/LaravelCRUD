@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('projects') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    disabled
                                    id="project_name"
                                    name="project_name"
                                    autocomplete="project_name"
                                    placeholder="Type the project name"
                                    class="form-control
                                    @error('project_name') is-invalid @enderror"
                                    value="{{ $project->project_name }}"
                                    required
                                    aria-describedby="nameHelp">

                                @error('project_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                            <br>
                            <a href="{{url('projects/')}}" type="button" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
