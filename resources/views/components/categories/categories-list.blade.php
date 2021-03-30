

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
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($categories as $category)
        <tr>
            <th scope="row"> {{ $category->id }}</th>
            <td> {{ $category->category_name }} </td>
            <td class="d-flex">
                <div class="pr-1">
                    <a href="{{url('categories/' . $category->id)}}" type="button" class="btn btn-success">Show</a>
                </div>
                <div class="pr-1">
                    <a href="{{url('categories/' . $category->id . '/edit')}}" type="button"
                       class="btn btn-primary">Edit</a>
                </div>
                <div>
                    <form action="{{url('categories/' . $category->id)}}" method="POST">
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
