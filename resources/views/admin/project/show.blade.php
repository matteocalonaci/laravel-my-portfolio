@extends('layouts.admin')

@section('content')
    <div class="card_container">
        <div class="card-show">
            <h4 class="mt-4 mb-4">{{ $project['name'] }}</h4>
            <div class="img_container">

                @if (Str::startsWith($project->image, "http"))

                <img src="{{$project['image']}}" alt="">

                @else

                <img src="{{asset('storage/' . $project->image)}}" alt="">

                @endif

            </div>
            <p class="mt-4"><b>Description:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e($project->description))) !!}</p>
        <p><b>GitHub:</b> <a href="{{$project->github_url}}">{{$project->github_url}}</a> </p>











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
