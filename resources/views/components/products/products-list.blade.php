

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<table class="table table-striped table-dark pt-5">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Project</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($products as $product)
        <tr>
            <th scope="row"> {{ $product->id }}</th>
            <td> {{ $product->product_name }} </td>
            <td> {{ $product->project->project_name }} </td>
            <td> {{ $product->category->category_name }} </td>
            <td class="d-flex">
                <div class="pr-1">
                    <a href="{{url('products/' . $product->id)}}" type="button" class="btn btn-success">Show</a>
                </div>
                <div class="pr-1">
                    <a href="{{url('products/' . $product->id . '/edit')}}" type="button"
                       class="btn btn-primary">Edit</a>
                </div>
                <div>
                    <form action="{{url('products/' . $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach

    </thead>
</table>
