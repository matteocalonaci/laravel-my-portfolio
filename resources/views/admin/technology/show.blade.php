@extends('layouts.admin')

@section('content')
    <div class="card_container">
        <div class="card-show">
            <h4 class="mt-4 mb-4">{{ $technology['name'] }}</h4>
            <p class="mt-4"><b>Description:</b> {{$technology->description}}</p>
        <p><i class="{{$technology->icon}}"></i></p>











        {{-- <div class="card-footer text-center">
                <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-primary p-">Vai ai dettagli</a>
                <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning p-1">Modifica</a>
                <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST
                    " class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger p-1">Elimina</button>
                    </form>
        </div> --}}

@endsection
