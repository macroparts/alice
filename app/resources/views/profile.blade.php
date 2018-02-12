@extends('app')

@section('content')


    <div class="container mb-3">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-overview">
                    <div class="row">
                        <div class="col-4">
                            <img class="user-img-profile" src="https://s3.amazonaws.com/37assets/svn/1024-original.1e9af38097008ef9573f03b03ef6f363219532f9.jpg">
                        </div>
                        <div class="col-8">
                            <div class="name-wrapper">
                                <p class="user-welcome">This is</p>
                                <p class="user-name font-weight-bold">Martin Colbert</p>
                                <i class="fas fa-user-plus mt-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="section-diver mb-4 mt-4"></div>
                    <p class="font-weight-bold">Biography</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren.</p>
                    <div class="section-diver mb-4 mt-4"></div>
                    <p class="font-weight-bold">Location</p>
                    <p>London, GB</p>
                    <div class="section-diver mb-4 mt-4"></div>
                    <div class="user-activities">
                        <div class="row">
                            <div class="col-4">
                                <p class="font-weight-bold">Discussion</p>
                                <p>2342</p>
                            </div>
                            <div class="col-4">
                                <p class="font-weight-bold">Friends</p>
                                <p>164</p>
                            </div>
                            <div class="col-4">
                                <p class="font-weight-bold">Seen</p>
                                <p>1948</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="profile-nav text-right">
                    <ul class="list-group">
                        <li class="list-group-item mb-2"><a class="active-link">Your Discussions</a></li>
                        <li class="list-group-item mb-2"><a>Friends</a></li>
                        <li class="list-group-item mb-2"><a>Seen</a></li>
                        <li class="list-group-item mb-2"><a>Recommend</a></li>
                        <li class="list-group-item mb-2"><a>Settings</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-content">
                    @include('cards.discussion_wall')
                </div>
            </div>

        </div>
    </div>



@endsection