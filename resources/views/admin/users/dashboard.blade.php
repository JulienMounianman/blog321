@extends('templates.admin')

@section('title', 'Dashboard')

@section('content')
    Page de l'utilisateur loggé
    <pre>
        {{var_dump(auth()->user())}}
    </pre>
@endsection