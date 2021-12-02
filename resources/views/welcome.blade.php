@extends('layout')

@section('content')

    <div class="container">
        <h1 align="center">My Galery</h1>
        <div class="row">
            @foreach($imagesInView as $image)
                <div class="col-md-3 galery-item">
                    <div>
                        <img src="/{{$image->image}}" class="img-thumbnail">
                    </div>
                    <a href="/show/{{$image->id}}" class="btn btn-success my-button" >Show</a>
                    <a href="/edit/{{$image->id}}" class="btn btn-danger my-button">Edit</a>
                    <a href="/delete/{{$image->id}}" onclick="return confirm('Are you')" class="btn btn-warning my-button">Delete</a>
                </div>
            @endforeach


        </div>

    </div>

@endsection
