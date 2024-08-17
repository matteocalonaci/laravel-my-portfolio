@extends('layouts.admin')
@section('content')
<h1 class="text-center p-4">My Projects</h1>
<div class="card_container">
    @foreach($project as $progetto)
            <div class="card">
                <div class="card-header">
                    <h5>{{$progetto->name}}</h5>
                </div>
                <div class="card-body">
                    <div class="img-container">
                        @if (Str::startsWith($progetto->image, "http"))

                        <img src="{{$progetto['image']}}" alt="">

                        @else

                        <img src="{{asset('storage/'.$progetto->image)}}" alt="image">
                        @endif
                    </div>
                    <p>Description: {{$progetto->description}}</p>
                    <p>Link GitHub: <a href="{{$progetto->github_url}}">{{$progetto->github_url}}</a></p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('admin.project.show', $progetto->id) }}" class="btn btn-primary p-1">View Details</a>
                    <a href="{{ route('admin.project.edit', $progetto->id) }}" class="btn btn-warning p-1">Edit</a>
                    <form action="{{ route('admin.project.destroy', $progetto->id) }}" method="POST
                        " class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger p-1">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
</div>
@endsection


