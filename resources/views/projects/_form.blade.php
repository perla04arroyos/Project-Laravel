@csrf

@if($project->image) 
    <img class="w-100 mx-auto d-block mb-4 rounded" src="/storage/{{ $project->image}}" alt="{{ $project->title }}">
@endif

<div class="form-group">
    <label for="title">Project title</label>
    <input type="text" class="form-control" name="title" value="{{ old('title', $project->title) }}">
</div>
<div class="form-group">
    <label for="description">Project description</label>
    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
</div>
<div class="form-group">
    <label for="url" >Project url</label>
    <input type="text" class="form-control" name="url" value="{{ old('url', $project->url) }}">
</div>
<div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="image">
    <label for="customFile" class="custom-file-label">Choose File</label>  
</div>

<button class="btn btn-success float-right mt-3">{{ $btnText }}</button>