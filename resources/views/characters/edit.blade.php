@extends('layouts.app')

@section('content')
<div class="py-3 bg-primary text-white text-center">
    <div class="container">
        <h1 class="display-3 fw-bold glitch">{{$character->title}}</h1>
    </div>
</div>
<div class="container py-5" style="max-width: 700px !important;">
    <form class="bg-light p-3" method="post" action="{{route('characters.update', $character->id)}}">
    @csrf
    @method('PUT')

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                type="text" 
                name="title" 
                id="title" 
                placeholder="select title" 
                class="form-control @error('title') is-invalid @enderror" 
                value="{{$character->title}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
        <div class="mb-3">
                <label for="thumb" class="form-label">Img</label>
                <input 
                type="text" 
                name="img" 
                id="img" 
                placeholder="select thumb" 
                class="form-control @error('img') is-invalid @enderror" 
                value="{{$character->img}}">
                @error('img')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date Release*</label>
                <input 
                type="date" 
                name="sale_date" 
                id="sale_date"
                class="form-control @error('sale_date') is-invalid @enderror" 
                value="{{$character->sale_date}}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">Description*</label>
                <textarea 
                type="text" 
                name="description" 
                id="description" 
                placeholder="description" 
                rows="5"
                class="form-control @error('description') is-invalid @enderror">{{$character->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <p class="fw-bold mt-0">* required</p>
        <button type="submit" class="btn btn-primary">Edit Character</button>
    </form>
</div>
@endsection