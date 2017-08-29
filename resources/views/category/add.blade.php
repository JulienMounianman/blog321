@extends('templates.default')
@section('title','Ajout des categories')
@section('content')
{!!  Form::open(['route' => 'SaveNewCat']) !!}

    {!! Form::text('name',null,['placeholder' =>'Nom']) !!}<br><br>
    {!! Form::text('description',null,['placeholder' =>'description']) !!}<br><br>
{!! Form::submit('Envoyer') !!}
{!! Form::close() !!}

@endsection