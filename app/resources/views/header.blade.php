<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Wall</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/movies') }}">Movies</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/series') }}">Series</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/people') }}">Make Friends</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/yourprofile') }}">Profile</a>
            </li>
        </ul>
    </div>
</nav>