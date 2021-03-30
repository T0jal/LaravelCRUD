@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('products') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    disabled
                                    id="product_name"
                                    name="product_name"
                                    autocomplete="name"
                                    class="form-control
                                    @error('name') is-invalid @enderror"
                                    value="{{ $product->product_name }}"
                                    required
                                    aria-describedby="nameHelp">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Category</label>
                                <input
                                    type="text"
                                    disabled
                                    id="category_id"
                                    name="category_id"
                                    autocomplete="category"
                                    class="form-control
                                    @error('category') is-invalid @enderror"
                                    value="{{ $product->category->category_name }}"
                                    required
                                    aria-describedby="nameHelp">

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Project Name</label>
                                <input
                                    type="text"
                                    disabled
                                    id="project_id"
                                    name="project_id"
                                    autocomplete="project"
                                    class="form-control
                                    @error('project') is-invalid @enderror"
                                    value="{{ $product->project->project_name }}"
                                    required
                                    aria-describedby="nameHelp">

                                @error('project')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea
                                    type="text"
                                    disabled
                                    id="description"
                                    name="description"
                                    autocomplete="description"
                                    class="form-control
                                    @error('description') is-invalid @enderror"
                                    required
                                    aria-describedby="nameHelp">{{$product->description}}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <a href="{{url('products/')}}" type="button" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
