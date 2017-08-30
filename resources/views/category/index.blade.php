@extends('templates.default')
@section('title','Liste des categories')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Action</th>
            <th>id</th>
            <th>nom</th>
            <th>description</th>

        </tr>
        </thead>

        <tbody>

        @foreach ($categories as $category)
        <tr>

            <td>
                <div class="field has-addons">
                    <p class="control"><a href="" class="button is-small is-info" >Afficher</a></p>
                    <p class="control"><a href="{{ route('EditCat', ['id'=> $category->id])}}" class="button is-small is-default">Editer</a></p>
                    <p class="control"><a href="{{ route('DeleteCat',['id'=> $category->id])}}" class="button  is-small is-danger">Supprimer</a></p>
                </div>

            </td>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>


@endsection


