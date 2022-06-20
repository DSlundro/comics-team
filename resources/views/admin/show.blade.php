@extends('layouts.app')

@section('content')

<div class="single_character">
    <div class="container">
        <div>
            {{$character->name}}
        </div>
        <div>
            <img src="{{$character->cover_image}}" alt="">
        </div>
        <div>
            Descrizione: {{$character->description}}
        </div>
    </div>
</div>

@endsection