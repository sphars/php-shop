<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="{{ route('home') }}" class="navbar-brand">Books Unlimited</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{ route('books.index') }}" class="nav-link">Books</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">About</a>
            </li>
        </ul>
        <div class="navbar-nav">
            @if (!Auth::check())
            <a href="{{ url('/login') }}" class="nav-item nav-link">Login</a>
            @else
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Admin</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('admin.index') }}" class="dropdown-item">Posts</a>
                    <a href="{{ url('/logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                    <form action="{{ url('/logout') }}" id="logout-form" method="POST">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
</nav>
