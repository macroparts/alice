<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Wall</a>
                </li>
                <li class="nav-item {{ Request::is('movies*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/movies') }}">Movies</a>
                </li>
                <li class="nav-item {{ Request::is('series*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/series') }}">Series</a>
                </li>

            </ul>
            <ul class="navbar-nav mr-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/people') }}">
                        <button class="btn btn-primary">Make Friends</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/yourprofile') }}">
                        <img src="https://s3.amazonaws.com/37assets/svn/1024-original.1e9af38097008ef9573f03b03ef6f363219532f9.jpg" class="user-img">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

