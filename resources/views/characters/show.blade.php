@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="bg-blue relative">
        <div class="container position-relative">
            <div class="characters-img position-absolute">
            <img src="{{ $character['img'] }}" alt="{{ $character['series'] }}">
            <div class="text-book px-2">character book</div>
            </div> 
        </div>
    </div>

    <div class="container">
        <div class="row  my-5">

            <div class="col-8 mb-5">
                <h3 class="text-uppercase">{{ $character['title'] }}</h3>
                <div class="col-12 m-0">
                    {{$character['description']}}
                </div>
            </div>

            <div class="col-4 text-end mb-5">
                <h6 class="text-uppercase ">advertisement</h6>
                <img class="rewards"src="{{asset('img/adv.jpg')}}" alt="">
            </div>
            
        </div>
    </div>
    <div class="bg-light pt-4 pb-5 border-top border-bottom border-gray">
        <div class="container">
            <div class="row ">
                <div class="col-12 pb-5">
                    <h3 class="mb-4">Specs</h3>
                    <div class="row row align-items-center m-0 py-2 border-top  border-bottom border-gray">
                        <div class="col-3">
                            <h6>On sale date:</h6>
                        </div>
                        <div class="col-9">
                            <p class=" m-0">
                                {{$character['sale_date']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection