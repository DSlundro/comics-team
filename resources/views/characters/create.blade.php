@extends('layouts.app')

@section('content')
<div class="py-3 bg-primary text-white text-center">
    <div class="container">
        <h1 class="display-3 fw-bold glitch">Add New Character</h1>
    </div>
</div>
<div class="container py-5" style="max-width: 700px !important;">
    <form class="bg-light p-3" method="post" action="{{route('comics.store')}}">
    @csrf

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
                placeholder="Batman" 
                class="form-control @error('title') is-invalid @enderror" 
                value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
        <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input 
                type="text" 
                name="thumb" 
                id="thumb" 
                placeholder="https://..." 
                class="form-control @error('thumb') is-invalid @enderror" 
                value="{{old('thumb')}}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date Release</label>
                <input 
                type="date" 
                name="sale_date" 
                id="sale_date"
                class="form-control @error('sale_date') is-invalid @enderror" 
                value="{{old('sale_date')}}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
       
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea 
                type="text" 
                name="description" 
                id="description" 
                placeholder="Write something..." 
                rows="5"
                class="form-control @error('description') is-invalid @enderror" 
                value="{{old('description')}}"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add New Character</button>
    </form>
</div>
@endsection