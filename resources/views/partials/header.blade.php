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
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link">Admin</a>
            </li>
        </ul>
    </div>
</nav>
