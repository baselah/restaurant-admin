<x-admin-master>
    @section('content')
        <h1>All Items</h1>

        @if (session('message'))
            <div class="alert alert-danger">{{ session('message') }}</div>
        @elseif(session('item-created-message'))
            <div class="alert alert-success">{{ session('item-created-message') }}</div>
        @elseif(session('item-updated-message'))
            <div class="alert alert-success">{{ session('item-updated-message') }}</div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Items Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ route('item.edit', $item->id) }}">{{ $item->name }}</a></td>
                                    <td>
                                        <p name="details">{{ $item->details }}</p>
                                    </td>
                                    <td><img width="100px" height="100px" src="{{ asset($item->image) }}" alt="item Image">
                                    </td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->created_at->diffForHumans() }}</td>
                                    <td>{{ $item->updated_at->diffForHumans() }}</td>
                                    <td>

                                        <form method="post" action="{{ route('item.destroy', $item->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>


                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="mx-auto">
            </div>
        </div>
        {{ $items->links('pagination::bootstrap-4') }}
    @endsection

    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        {{--            <script src="{{asset('js/demo/datatables-demo.js')}}"></script> --}}
    @endsection

</x-admin-master>
