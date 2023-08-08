<x-admin-master>
    @section('content')
        <h1>Edit Category</h1>

        <form method="post" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                    placeholder="Enter Name" value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <div><img height="100px" src="{{ asset($category->image) }}" alt="category image"></div>
                <label for="file">Image</label>
                <input type="file" name="img" class="form-control-file" id="img">
            </div>





            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-admin-master>
