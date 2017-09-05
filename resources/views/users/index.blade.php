@extends('templates.default')

@section('title', 'Liste des membres')

@section('content')

    @foreach($users as $user)
    <div class="box">
        <article class="media">
            <div class="media-left">
                <figure class="image is-64x64">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAxWAAAAJDE2YTUxNGFlLTAyNGYtNDJiNC04NTQxLTQ5MWJiMmRhNGY3Zg.jpg"
                         alt="Image">
                </figure>
            </div>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>{{$user->first_name}} {{$user->last_name}}</strong>
                        <small>{{$user->pseudo}}</small>
                        <small>{{$user->role}}</small>
                        <br>
                        {{$user->email}}
                        <br>
                        {{$user->birthdate}}
                        <br>
                        <a href="http://{{$user->portfolio_url}}">Portfolio</a>
                        <br>
                        <a href="http://{{$user->website_url}}"> Website</a>

                    </p>
                </div>
                <nav class="level is-mobile">
                    <div class="level-left">
                        <a class="level-item">

                            <span class="icon is-small"> <i class="fa fa-fw fa-file-text-o"></i></span>
                            {{$user->posts->count()}}
                        </a>


                        <a class="level-item">


                            <span class="icon is-small"><i class="fa fa-thumbs-up"></i></span>

                        </a>

                    </div>
                </nav>
            </div>
        </article>
    </div>
    @endforeach
@endsection