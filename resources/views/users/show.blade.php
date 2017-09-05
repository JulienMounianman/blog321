@extends('templates.default')

@section('title', 'Profil : ' . $user->pseudo)

@section('content')
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
    <h2 class="title">Articles</h2>
    <div class="columns is-multiline">
        @foreach($user->posts as $post)

            <div class="column is-one-quarter">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <a href="{{route('PostShow', ['id'=>$post->id])}}">{{$post->title}}</a>
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <small>Create : {{ $post->updated_at->diffForHumans(now()) }}
                                <br>
                                Update : {{$post->created_at->diffForHumans(now())}}

                            </small>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach
    </div>

@endsection