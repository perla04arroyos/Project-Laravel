@csrf
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

<button class="btn btn-success float-right">{{ $btnText }}</button>