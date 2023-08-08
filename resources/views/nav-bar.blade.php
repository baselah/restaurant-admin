<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="{{ route('home') }}">مطبخ الزهراء</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">الرئيسية</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">ادمن</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-autp" style="padding-right: 700px">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        {{ Auth::user()->username }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">logout</a></li>
                    </ul>
                </li>
            @endauth
            @guest

            <li class="nav-item">
                <a class="nav-link" href="{{ route('signup') }}">
                    <i class="fa fa-user"> Register</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signin') }}">
                    <i class="fas fa-sign-in-alt"> Login</i>
                </a>
            </li>

            @endguest

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-bell"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-cog"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
