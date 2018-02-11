@extends('app')

@section('content')

    <div class="container wall">
        <div class="row">
            <div class="col-md-3 d-none d-md-block">
                <div class="profile-wrapper text-center p-3">
                   <a href="{{ url('/yourprofile') }}"><img class="user-img-wall mb-3" src="https://s3.amazonaws.com/37assets/svn/1024-original.1e9af38097008ef9573f03b03ef6f363219532f9.jpg"></a>
                    <p class="user-name font-weight-bold">Martin Colbert</p>
                    <p class="user-location">London, GB</p>
                    <div class="activities mt-3">
                        <div class="row">
                            <div class="col-6 left-information">
                                <p class="user-name font-weight-bold">253</p>
                                <p class="user-location">Follower</p>
                            </div>
                            <div class="col-6 right-information">
                                <p class="user-name font-weight-bold">535</p>
                                <p class="user-location">Seen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="wall-wrapper">
                   @include('cards.discussion_wall')
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <div class="information-wrapper">
                    <div class="recent-feed mb-4 p-3">
                        <p class="font-weight-bold">Your Activities</p>
                    </div>
                    <div class="impressum-wrapper p-3">
                        <ul class="list-group">
                            <li class="list-group-item mb-3"><a href="{{ url('/') }}">© 2018 Alice</a></li>
                            <li class="list-group-item mb-3"><a href="{{ url('/impressum') }}">Impressum</a></li>
                            <li class="list-group-item"><a href="{{ url('/about') }}">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection

