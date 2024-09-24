@extends('layouts.admin')

@section('content')
				<div class="card_container">
								<div class="card-show">
												<h4 class="mt-4 mb-4">{{ $project['name'] }}</h4>
												<div class="img_container">

																@if (Str::startsWith($project->image, 'http'))
																				<img src="{{ $project['image'] }}" alt="">
																@else
																				<img src="{{ asset('storage/' . $project->image) }}" alt="">
																@endif

												</div>
                                                <div class="card-body-show">
												<p class="mt-4"><b>Description:</b> {!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e($project->description))) !!}</p>
												<p><b>GitHub:</b> <a class="text-white" href="{{ $project->github_url }}">{{ $project->github_url }}</a> </p>
                                                <p><b>{{$project->technology->name}}
												<p><b>Tecnologia Usata:</b></p>
												@foreach ($project->languages as $language)
																<i class="{{ $language->icon }}"></i>
												@endforeach
                                                </div>
								@endsection
