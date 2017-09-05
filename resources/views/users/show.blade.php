@extends('templates.default')

@section('title', 'Profil : ' . $user->pseudo)

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{$user->pseudo}}</h3>
        </div>
        <div class="panel-body">
            <p>
                Nom : <strong>{{$user->first_name}}</strong>
                <br>
                Prenom :
                <small>{{$user->last_name}}</small>
                <br>

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


    <h2 class="title">Articles</h2>

    @foreach($user->posts as $post)
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"> <a href="{{route('PostShow', ['id'=>$post->id])}}">{{$post->title}}</a></h3>
        </div>
        <div class="panel-body">
            <small>
                Create : {{ $post->updated_at->diffForHumans(now()) }}
                <br>
                Update : {{$post->created_at->diffForHumans(now())}}
            </small>
        </div>
    </div>
    @endforeach




@endsection