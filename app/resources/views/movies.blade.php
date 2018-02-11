@extends('app') @section('content')
    <div class="container">
        <h3 class="wrapper-title float-left">Movies</h3>
        <div class="btn-group float-right filter">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Latest
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Popular</button>
                <button class="dropdown-item" type="button">Recent Activities</button>
                <button class="dropdown-item" type="button">Follower</button>
                <button class="dropdown-item" type="button">Discussions</button>
            </div>
        </div>
        <div class="input-group float-right search">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card media-card bg-dark text-white">
                        <img class="card-img" src="http://de.web.img3.acsta.net/pictures/17/11/16/12/45/0662143.jpg"
                             alt="Card image">
                        <div class="card-img-overlay">
                            <div class="main-information p-4">
                                <h5 class="card-title align-text-bottom">{{ $movie->title }}</h5>
                                <div class="line-spacer mt-3 mb-3"></div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <p class="mb-0">Discussions</p>
                                        <p class="mb-0">{{ $movie->discussions_count }}</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="mb-0">Followers</p>
                                        <p class="mb-0">{{ $movie->followers_count }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection