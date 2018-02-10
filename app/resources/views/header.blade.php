<nav class="navbar navbar-expand-lg navbar-light mb-5">
    <a class="navbar-brand">Alice</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Wall</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/movies') }}">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/series') }}">Series</a>
            </li>

        </ul>
        <ul class="navbar-nav navbar-right mr-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/people') }}">
                    <button class="btn btn-primary">Make Friends</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/yourprofile') }}">
                    <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img">
                </a>
            </li>
        </ul>
    </div>
</nav>

