@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Create Project') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('projects') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="project_name"
                                    autocomplete="project_name"
                                    placeholder="Type the project name"
                                    class="form-control
                                    @error('project_name') is-invalid @enderror"
                                    value="{{ old('project_name') }}"
                                    required
                                    aria-describedby="nameHelp">

                                @error('project_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="mt-2 mb-5 btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
