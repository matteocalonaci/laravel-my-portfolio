@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('admin.project.update', $project->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
								<div class="form-group">
												<label for="name" class="form-label">Name:</label>
												<input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
								</div>
								<div class="form-group">
												<label for="image" class="form-label">Image:</label>
												<input type="file" class="form-control" id="image" name="image" value="{{ $project->image }}">
								</div>
								<div class="form-group">
												<label for="description" class="form-label">Description:</label>
												<textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
								</div>
								<div class="form-group">
												<label for="github_url" class="form-label">GitHub URL:</label>
												<input type="text" class="form-control" id="github_url" name="github" value="{{ $project->github_url }}">
								</div>
								<div class="form-group">
                                 <label for="technology_id" class="form-label">Technology</label>
                                 <select class="form-select dorm-select-lg" name="technology_id" id="technologies">
                                  @foreach ($technology as $tech)
                                      <option value="{{ $tech->id }}" {{ $project->technology_id == $tech->id ? 'selected' : '' }}>{{ $tech->name }}</option>
                                  @endforeach
                              </select>
                             </div>
                             <div class="form-group">
                                <label for="language" class="form-label p-2"><b>Language:</b></label>
                                <div class="check-box">
                                    @foreach($language as $lang)
                                        <input type="checkbox" name="languages[]" value="{{ $lang->id }}" @if(in_array($lang->id, $project->languages->pluck('id')->toArray())) checked @endif>
                                        <label>{{ $lang->name }}</label>
                                    @endforeach
                                </div>
                            </div>
								<button type="submit" class="btn btn-primary">Edit</button>
				</form>
@endsection
