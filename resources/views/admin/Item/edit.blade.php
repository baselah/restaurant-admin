<x-admin-master>
    @section('content')
        <h1>Edit Item</h1>

        <form method="post" action="{{ route('item.update', $item->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                    placeholder="Enter Name" value="{{ $item->name }}">
            </div>
            <div class="form-group">
                <div><img height="100px" src="{{ asset($item->image) }}" alt="category image"></div>
                <label for="file">Image</label>
                <input type="file" name="img" class="form-control-file" id="img">
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $item->category_id) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @foreach ($ingredients as $ingredient)
                <div class="form-check">
                    <input type="checkbox" name="ingredients[]" id="ingredient-{{ $ingredient->id }}"
                        value="{{ $ingredient->id }}" @if ($item->ingredient->contains($ingredient->id)) checked @endif>
                    <label for="ingredient-{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                </div>
            @endforeach
            <div class="form-group">
                <label for="details">Details</label>
                <textarea name="details" class="form-control" id="details" cols="30" rows="10" dir="rtl">{{ $item->details }}</textarea>
            </div>






            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-admin-master>
