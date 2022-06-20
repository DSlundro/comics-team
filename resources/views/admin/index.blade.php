@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <h1>All Characters</h1>
        <div>
            <a class="btn btn-primary" href="{{route('character.create')}}" role="button">Add Comic</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cover image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <tbody>
                @forelse($characters as $character)
                <tr>
                    <td scope="row">{{$character->id}}</td>
                    <td>{{$character->name}}</td>
                    <td><img src="{{$character->cover_image}}" alt=""></td>
                    <td>{{$character->description}}</td>
                    <td>
                        <a href="{{route('characters.show', $comic->id)}}">View</a>
                        <a href="{{route('characters.edit', $comic->id)}}">Edit</a>
                        <a href="{{route('characters.destroy', $comic->id)}}">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td scope="row">No characters yet</td>
                </tr>
                @endforelse
            </tbody>
        </thead>
    </table>
</div>

@endsection