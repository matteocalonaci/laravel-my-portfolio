@extends('layouts.admin')
@section('content')

<form  method="POST" action="{{route('admin.technology.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
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
        <label for="icon" class="form-label">Icon:</label>
        <input type="text" class="form-control" id="icon" name="icon">
        @error('github')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection
