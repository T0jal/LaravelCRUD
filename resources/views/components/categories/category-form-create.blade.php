@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Create Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('categories') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="category_name"
                                    autocomplete="name"
                                    placeholder="Type the category name"
                                    class="form-control
                                    @error('name') is-invalid @enderror"
                                    value="{{ old('category_name') }}"
                                    required
                                    aria-describedby="nameHelp">

                                @error('name')
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
