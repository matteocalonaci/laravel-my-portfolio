@extends('layouts.admin')
@section('content')

<form  method="POST" action="{{route('admin.project.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="image" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" name="image">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="form-group">
        <label for="github_url" class="form-label">GitHub URL:</label>
        <input type="text" class="form-control" id="github_url" name="github_url">
        @error('github')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection
