@extends('templates.default')



@section('content')
    Tags :
    @foreach($post->tags as $tag)
        <i class="fa fa-tag"></i> {{ $tag->tag }} 
    @endforeach




    <div class="card">
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
                    </figure>
                </div>

                <div class="media-content">
                    <p class="title is-4">  {{$post->title}}</p>
                    <p class="subtitle is-6">{{$post->user->pseudo}}</p>
                </div>
            </div>

            <div class="content">
                {{$post->content}}
                <br>
                <small>Create : {{ $post->updated_at->diffForHumans(now()) }}
                    <br> Update : {{$post->created_at->diffForHumans(now())}}</small>

            </div>
        </div>
    </div>

@endsection
