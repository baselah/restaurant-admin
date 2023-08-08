<x-admin-master>
    @section('content')
        <h1>Create</h1>

        <form method="post" action="{{ route('ingredient.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                    placeholder="Enter name">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-admin-master>
