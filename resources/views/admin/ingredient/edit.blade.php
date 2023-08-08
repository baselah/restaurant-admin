<x-admin-master>
    @section('content')
        <h1>Edit Ingredient</h1>

        <form method="post" action="{{ route('ingredient.update', $ingredient->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                    placeholder="Enter Name" value="{{ $ingredient->name }}">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-admin-master>
