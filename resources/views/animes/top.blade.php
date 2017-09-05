@extends('templates.default')

@section('title', 'Classement des Animes')

@section('content')
    <table class="table">
        <thead>
        <tr>

            <td>id</td>
            <td>title</td>
            <td>status</td>
            <td>note</td>
            <td>saison</td>
            <td>episode</td>
        </tr>
        </thead>
        <tbody>
        @foreach($animes as $anime)
            <tr>
                <td>{{$anime->id}}</td>
                <td>{{$anime->title}}</td>
                <td>{{$anime->status}}</td>
                <td>{{$anime->note}}</td>
                <td>{{$anime->season}}</td>
                <td>{{$anime->episode}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection