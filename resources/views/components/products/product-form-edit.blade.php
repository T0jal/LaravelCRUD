@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('products/' . $product->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    id="product_name"
                                    name="product_name"
                                    autocomplete="name"
                                    placeholder="Type the product name"
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

                            <div>
                                <div>
                                    <label>Project Name</label>
                                </div>
                                <select name="project_id" class="form-select" aria-label="Default select example">
                                    @foreach($projects as $project)
                                        <option value = {{ $project->id }} >
                                            {{ $project->project_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <div>
                                    <label>Category</label>
                                </div>
                                <select name="category_id" class="form-select" aria-label="Default select example">
                                    @foreach($categories as $category)
                                        <option value = {{ $category->id }} >
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea
                                    type="text"
                                    id="description"
                                    name="description"
                                    autocomplete="description"
                                    placeholder="Type your description"
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

                            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                            <br>
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{url('products/')}}" type="button" class="btn btn-danger">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
