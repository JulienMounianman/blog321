@extends('templates.default')

@section('title', 'Liste des membres')

@section('content')


    @foreach($users as $user)

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{$user->pseudo}}</h3>
            </div>
            <div class="panel-body">
                <p>
                   Nom : <strong>{{$user->first_name}}</strong>
                    <br>
                    Prenom : <small>{{$user->last_name}}</small> <br>

                   Role :{{$user->role}}
                    <br>
                    E-mail :
                    {{$user->email}}
                    <br>
                    Date de naissance :
                    {{$user->birthdate}}
                    <br>
                    Portfolio :
                    <a href="http://{{$user->portfolio_url}}">Portfolio</a>
                    <br>
                    Website :
                    <a href="http://{{$user->website_url}}"> Website</a>

                </p>
                <button class="btn btn-primary" type="button">
                    Posts <span class="badge">{{$user->posts->count()}}</span>
                </button>
            </div>
        </div>
    @endforeach


@endsection
