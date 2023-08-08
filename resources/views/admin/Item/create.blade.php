<x-admin-master>
    @section('content')
        <h1>Create</h1>

        <form method="post" action="{{ route('item.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="file">Item Image</label>
                <input type="file" name="img" class="form-control-file" id="img">
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Ingredients : </label>
                @foreach ($ingredients as $ingredient)
                    <div class="form-check">
                        <input type="checkbox" name="ingredients[]" id="ingredient-{{ $ingredient->id }}"
                            value="{{ $ingredient->id }}">
                        <label for="ingredient-{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="details">Details</label>
                <textarea name="details" class="form-control" id="details" cols="30" rows="10" dir="rtl"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-admin-master>
