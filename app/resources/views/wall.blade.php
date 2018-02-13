@extends('app')

@section('content')

    <div class="container wall">
        <div class="row">
            <div class="col-md-3 d-none d-md-block">
                <a href="{{ url('/yourprofile') }}">
                    <div class="profile-wrapper">
                        <div class="profile-welcome p-3">
                            <div class="row">
                                <div class="col-4">
                                    <img class="user-img-profile"
                                         src="https://s3.amazonaws.com/37assets/svn/1024-original.1e9af38097008ef9573f03b03ef6f363219532f9.jpg">
                                </div>
                                <div class="col-8">
                                    <div class="name-wrapper">
                                        <p class="user-welcome">Hi,</p>
                                        <p class="user-name font-weight-bold">Martin Colbert</p>
                                    </div>
                                </div>
                            </div>
                            <div class="section-diver mb-4 mt-4"></div>
                            <div class="user-activities">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="font-weight-bold font-size-sm">Discussions</p>
                                        <p class="font-size-sm gray">2342</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="font-weight-bold font-size-sm">Friends</p>
                                        <p class="font-size-sm gray">164</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="font-weight-bold font-size-sm">Seen</p>
                                        <p class="font-size-sm gray">1948</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
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

