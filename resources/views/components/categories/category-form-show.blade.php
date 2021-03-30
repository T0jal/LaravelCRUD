@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('categories') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    disabled
                                    id="name"
                                    name="name"
                                    autocomplete="name"
                                    class="form-control
                                    @error('name') is-invalid @enderror"
                                    value="{{ $category->category_name }}"
                                    required
                                    aria-describedby="nameHelp">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                            <br>
                            <a href="{{url('categories/')}}" type="button" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
