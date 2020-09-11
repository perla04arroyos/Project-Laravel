@csrf

<label for="title">Project title</label>
<input type="text" name="title" value="{{ old('title', $project->title) }}">
<label for="description">Project description</label>
<textarea name="description" id="" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
<label for="url" >Project url</label>
<input type="text" name="url" value="{{ old('url', $project->url) }}">

<button>{{ $btnText }}</button>