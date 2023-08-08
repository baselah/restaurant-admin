<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        body {
            background-image: linear-gradient(to bottom right, #f7f7f7, #8ef071);
            background-attachment: fixed;
        }

        .login-form {
            margin-top: 80px;
        }

        #aa {
            margin-left: 130px
        }
    </style>
</head>

<body>
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger fs-5" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 col-md-offset-4 login-form">
                <h2>Login</h2>
                <form action="{{ route('signin') }}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                    <a id="aa" href="{{ route('register') }}">Don't have account ?</a>

                </form>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
