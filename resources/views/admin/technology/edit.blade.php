@extends('layouts.admin')
@section('content')

<form  method="POST" action="{{route('admin.technology.update', $tachnology->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$technology->name}}">
    </div>
    <div class="form-group">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description">{{$technology->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="icon" class="form-label">Icon:</label>
        <input type="text" class="form-control" id="github_url" name="github" value="{{$technology->icon}}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection
