@extends('layouts.app')

@section('content')
<div class="container text-primary py-3">

    <div class="row">
        <div class="col-12 mt-3">
            <div class="pull-left">
                <h2>characters</h2>
            </div>
        </div>
    </div>
    <div class="row text-start">
        <div class="pull-right py-4">
            <a href="{{route('characters.create')}}" class="btn btn-primary"> Add New Character</a>
        </div>
    </div>

    <div class="alerts">
        <div class="d-flex justify-content-center">
            <div class="text-center" style="width: 200px;">
                @if (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }}
                </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="text-center" style="width: 200px;">
                @if (session('edited'))
                <div class="alert alert-success">
                    {{ session('edited') }}
                </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="text-center" style="width: 200px;">
                @if (session('deleted'))
                <div class="alert alert-danger">
                    {{ session('deleted') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <table class="table text-white">
        <tr>
            <th>ID</th>
            <th>Img</th>
            <th>Title</th>
            <th>Description</th>
            <th>Rlease Date</th>
            <th>Series</th>
            <th>Type</th>
            <th>Price</th>
            <th>Options</th>
        </tr>

        @foreach($characters as $character)
        <tr class="">
            <td class="fs-5 fw-bold">{{$character->id}}</td>
            
            <td>{{$character->title}}</td>
            <td class="desc text-justify">{{mb_strimwidth($character->description, 0, 300, "...")}}</td>
            <td class="date">{{$character->sale_date}}</td>
            <td class="buttons">
                <!-- SHOW -->
                <button type="button" class="btn btn-primary ">
                    <a href="{{ route('characters.show', $character->id) }}">
                        View
                    </a>
                </button>
                <!-- EDIT -->
                <button type="button" class="btn btn-warning">
                    <a href="{{route('characters.edit',$character->id)}}">
                        Edit
                    </a>
                </button>
                <!-- DELETE -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-character-{{ $character->id }}">
                    Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="delete-character-{{$character->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$character->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><span class="text-secondary">{{$character->title}}</span>" </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-secondary text-center">
                                Are you sure?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="{{route('characters.destroy',$character->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </td>
        </tr>
        @endforeach
    </table>    

</div>
@stop
