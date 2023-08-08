<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
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

        <div class="row">
            <div class="col-md-4 col-md-offset-4 login-form">
                <h2>Register</h2>
                <form action="{{ route('signup') }}" method="post">
                    @csrf
                    <div class="form-group">
                        @error('username')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="username">User name:</label>
                        <input name="username" type="text" class="form-control" id="username"
                            placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="email">Email:</label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{ $message}}
                            </div>
                        @enderror
                        <label for="password">Password:</label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        @error('password_confirmation')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password_confirmation">Confirm Password:</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="password_confirmation" placeholder="Confirm password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Register</button>
                    <a id="aa" href="{{ route('login') }}">already have account ?</a>
                </form>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
