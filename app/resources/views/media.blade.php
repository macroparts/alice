@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="bg"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="media-img"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="main-information">
                            <p class="media-type font-size-sm">TV Show - 2 Seasons</p>
                            <h1 class="media-title font-weight-bold">Stranger Things</h1>
                            <p class="media-description">
                                When a young boy disappears, his mother, a police chief, and his friends, must confront
                                terrifying forces in order to get him back.
                            </p>
                            <div class="cta-wrapper mt-3">
                                <div class="row">
                                    <div class="col-3">
                                        <button class="btn btn-primary">Seen it?</button>
                                    </div>
                                    <div class="col-3">
                                        <p class="font-weight-bold voting mt-2">
                                            <i class="far fa-thumbs-up fa-lg"></i>
                                            124
                                            <i class="far fa-thumbs-down fa-lg"></i>
                                        </p>
                                    </div>
                                    <div class="col-4">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="side-information text-right">
                            <div class="side-element mb-5">
                                <p class="font-weight-bold">Genre</p>
                                <p>Fantasy/Horror</p>
                            </div>
                            <div class="side-element mb-5">
                                <p class="font-weight-bold">Follower</p>
                                <p>1.349.3242</p>
                            </div>
                            <div class="side-element">
                                <p class="font-weight-bold">Discussion</p>
                                <p>23452</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container media-wall mt-5">
        <div class="row">
            <div class="col-md-3 d-none d-md-block">
                <div class="navigation-wrapper p-3">
                    <ul class="list-group discussion">
                        <li class="list-group-item mb-3"><a class="font-weight-bold">Discussions</a></li>
                        <li class="list-group-item sub-item pl-3 mb-3"><a class="font-size-sm">All</a></li>
                        <li class="list-group-item sub-item pl-3 mb-3"><a class="font-size-sm">Popular</a></li>
                        <li class="list-group-item sub-item pl-3 mb-3"><a class="font-size-sm">Latest</a></li>
                        <li class="list-group-item sub-item pl-3 mb-3"><a class="font-size-sm">From Friends</a></li>
                    </ul>
                    <ul class="list-group storyline pt-3">
                        <li class="list-group-item"><a class="font-weight-bold">Storyline</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="wall-wrapper">
                    @include('cards.discussion_media')
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <div class="information-wrapper">
                    <div class="friends-feed mb-4 p-3">
                        <p class="font-weight-bold">People</p>
                        <div class="row mt-3">
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                            <div class="col-3">
                                <img src="http://dreamicus.com/data/face/face-04.jpg" class="user-img mb-3">
                            </div>
                        </div>
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

