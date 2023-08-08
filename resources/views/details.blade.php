<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Details Page</title>
</head>

<body>

    @include('nav-bar')

    <section>
        <div class="container flex crr" style="height: auto; ">
            <div class="left">
                <div class="main_image">
                    <img src="{{ asset($item->image) }}" class="slide" style="width: 500px ; height: 500px">
                </div>
            </div>
            <div class="right">
                <h3>{{ $item->name }}</h3>
                <p class="text-right">{{ $item->details }} </p>
                <h3>المكونات :</h3>
                <br>
                <ol>
                    @foreach ($item->ingredient as $ingredient)
                        <li class="text-right">{{ $ingredient->name }}</li>
                    @endforeach

                </ol>

            </div>
        </div>
    </section>


    <script>
        function img(anything) {
            document.querySelector('.slide').src = anything;
        }

        function change(change) {
            const line = document.querySelector('.home');
            line.style.background = change;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('footer')

</body>

</html>
