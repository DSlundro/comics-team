@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Create Character</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('character.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Superman " aria-describedby="nameHelper">
            <small id="nameHelper" class="text-muted">Add the character name here</small>
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">cover image</label>
            <input type="text" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" placeholder="Superman " aria-describedby="cover_imageHelper">
            <small id="cover_imageHelper" class="text-muted">Add the character cover image image here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label  @error('description') is-invalid @enderror">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Add Character</button>
    </form>

</div>

@endsection