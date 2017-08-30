@extends('templates.default')
@section('title','editer des categories')
@section('content')

    {!!  Form::model($category,['route' => ['UpdateCat',$category->id]]) !!}
    <div class="field">
        <label for="name" class="label">Nom </label>
        <div class="control">
            {!! Form::text('name',null,[

            'id'=> 'name',
             'class'=>'input',
             'required'=>'true',
            ]) !!}
        </div>
        <label for="desc" class="label">description </label>
        <div class="control">
            {!! Form::text('description',null,[

            'id'=> 'desc',
             'class'=>'input',

             ]) !!}
        </div>
    </div>

   {!!  Form::submit('editer',['class'=>'button is-primary']) !!}


    {!! Form::close() !!}






@endsection