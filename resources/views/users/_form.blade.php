@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
</div>

@unless ($user->id)
<div class="form-group">
    <label for="password">Password </label>
    <input type="password" class="form-control" name="password">
</div>
<div class="form-group">
    <label for="password_confirmation">Password Confirm</label>
    <input type="password" class="form-control" name="password_confirmation">
</div>
@endunless

<div class="for-group">
    @foreach ($roles as $id => $name)
        <input 
        type="checkbox" 
        name="roles[]" 
        value="{{ $id }}"
        {{ $user->roles->pluck('id')->contains($id) ? 'checked' : ''}}>
        <label for="roles">{{ $name }}</label>                   
    @endforeach  
</div>