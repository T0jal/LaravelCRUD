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
        <th scope="col">Project Name</th>
        <th scope="col">Project's Products</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($projects as $project)
        <tr>
            <th scope="row" style="display: flex"> {{ $project -> id }}</th>
            <td> {{ $project->project_name }} </td>
            <td>
                @foreach($project -> products as $product)
                    {{ $loop->first ? '' : ', ' }}
                    {{ $product->product_name }}
                @endforeach
            </td>
            <td style="display: flex">
                <div class="pr-1">
                    <a href="{{url('projects/' . $project->id)}}" type="button" class="btn btn-success">Show</a>
                </div>

                <div class="pr-1">
                    <a href="{{url('projects/' . $project->id . '/edit')}}" type="button"
                       class="btn btn-primary">Edit</a>
                </div>

                <div>
                    <form action="{{url('projects/' . $project->id)}}" method="POST">
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
