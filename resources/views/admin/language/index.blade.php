@extends('layouts.admin')
@section('content')
				<h1 class="text-center p-4">My Projects</h1>
				<div class="card_container">
								@foreach ($technology as $progetto)
												<div class="card">
																<div class="card-header">
																				<h5>{{ $progetto->name }}</h5>
																</div>
																<div class="card-body">
																				<p class="mt-4"><b>Description:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e(Str::limit($progetto->description, 150, ' [Read more]')))) !!}</p>
																				<p><i class="{{ $progetto->icon }}"></i></p>
																</div>
																<div class="card-footer text-center">
																				<a href="{{ route('admin.technology.show', $progetto->id) }}" class="btn btn-primary p-1">View Details</a>
																				<a href="{{ route('admin.technology.edit', $progetto->id) }}" class="btn btn-warning p-1">Edit</a>
																				<form action="{{ route('admin.technology.destroy', $progetto->id) }}" method="POST" class="d-inline">
																								@csrf
																								@method('DELETE')
																								<button type="submit" class="btn btn-danger p-1">Delete</button>
																				</form>
																</div>
												</div>
								@endforeach
				</div>
@endsection
