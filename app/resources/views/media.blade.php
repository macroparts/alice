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

@endsection