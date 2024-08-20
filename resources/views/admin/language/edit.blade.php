@extends('layouts.admin')
@section('content')

<form  method="POST" action="{{route('admin.language.update', $tachnology->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$language->name}}">
    </div>
    <div class="form-group">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description">{{$language->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="icon" class="form-label">Icon:</label>
        <input type="text" class="form-control" id="icon" name="icon" value="{{$language->icon}}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection
