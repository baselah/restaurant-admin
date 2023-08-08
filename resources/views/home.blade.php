<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitchen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>


    @include('nav-bar')
    <br>
    <br>
    <div class="container text-right">
        <div class="row" ">

             @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card">
                    <img src={{ asset($category->image) }} class="card-img-top" alt="Item image" style="height:250px; ">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <a href="{{ route('foods', $category->id) }}" class="btn btn-success">عرض المأكولات</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div> <!-- end row -->
        {{ $categories->links('pagination::bootstrap-4') }}


    </div> <!-- end container -->

    @include('footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
