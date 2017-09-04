@extends('templates.admin')

@section('title', 'Mon Profil')

@section('content')




<div class="box">
    <article class="media">
        <div class="media-left">
            <figure class="image is-64x64">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAxWAAAAJDE2YTUxNGFlLTAyNGYtNDJiNC04NTQxLTQ5MWJiMmRhNGY3Zg.jpg" alt="Image">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</strong> <small>{{auth()->user()->pseudo}}</small> <small>{{auth()->user()->role}}</small>
                    <br>
                    {{auth()->user()->email}}/{{auth()->user()->birthdate}} / <a href="http://{{auth()->user()->portfolio_url}}">Portfolio</a> / <a href="http://{{auth()->user()->website_url}}"> Website</a>

                </p>
            </div>
            <nav class="level is-mobile">
                <div class="level-left">
                    <a class="level-item">
                        Nombre de post

                        <span class="icon is-small"> <i class="fa fa-fw fa-file-text-o"></i></span>

                    </a>
                    <a class="level-item">
                        Nombre de commentaires

                        <span class="icon is-small"><i class="fa fa-thumbs-up"></i></span>

                    </a>

                </div>
            </nav>
        </div>
    </article>
</div>

@endsection
