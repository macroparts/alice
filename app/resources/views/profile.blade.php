@extends('app')

@section('content')

    <div class="container mb-3">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="profile-header p-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="user-img-profile" src="https://s3.amazonaws.com/37assets/svn/1024-original.1e9af38097008ef9573f03b03ef6f363219532f9.jpg">
                        </div>
                        <div class="col-4">
                            <div class="user-information">
                                <p class="user-name font-weight-bold">Martin Colbert</p>
                                <p class="user-location mb-2">London, GB</p>
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="user-activities text-center ">
                                <div class="row">
                                    <div class="activity mr-5">
                                        <p class="font-weight-bold">2313</p>
                                        <p>Discussion</p>
                                    </div>
                                    <div class="activity mr-5">
                                        <p class="font-weight-bold">253</p>
                                        <p>Friends</p>
                                    </div>
                                    <div class="activity">
                                        <p class="font-weight-bold">535</p>
                                        <p>Seen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mb-4">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="user-nav p-3">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active-link" href="#">Your Discussions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Friends</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Seen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recommend</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="wall-wrapper">
                    @include('cards.discussion_wall')
                </div>
            </div>
        </div>
    </div>


@endsection