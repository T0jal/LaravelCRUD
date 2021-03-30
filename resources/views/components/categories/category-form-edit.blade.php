@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Edit Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('categories/' . $category->id) }}">
                            @csrf
                            @method('PUT')
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
                                    value="{{ $category->name }}"
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
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
