@extends('app')

@section('content')

    <div class="container wall">
        <div class="row">
            <div class="col-md-3 d-none d-md-block">
                <div class="profile-wrapper">

                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="wall-wrapper">
                   @include('cards.discussion_wall')
                </div>
            </div>
            <div class="col-md-3 information-wrapper d-none d-md-block">
                <div class="recent-feed mb-4">

                </div>
                <div class="impressum-wrapper">

                </div>
            </div>
        </div>

@endsection

