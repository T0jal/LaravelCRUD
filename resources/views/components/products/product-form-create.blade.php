@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">{{ __('Create Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('products') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    id="product_name"
                                    name="product_name"
                                    autocomplete="name"
                                    placeholder="Indicate the product's name"
                                    class="form-control
                                    @error('name') is-invalid @enderror"
                                    value="{{ old('product_name') }}"
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
                            <br>
                            <div>
                                <div>
                                    <label>Category Name</label>
                                </div>
                                <select name="category_id" class="form-select" aria-label="Default select example">
                                    @foreach($categories as $category)
                                        <option value = {{ $category->id }} >
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea
                                    type="text"
                                    id="description"
                                    name="description"
                                    autocomplete="description"
                                    placeholder="Describe the product in a few words"
                                    class="form-control
                                    @error('description') is-invalid @enderror"
                                    required
                                    aria-describedby="nameHelp">{{ old('description') }}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

