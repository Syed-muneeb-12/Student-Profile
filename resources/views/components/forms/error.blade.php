@props([
    'name'=>'required'
])

@error($name)
    <p class="text-xs text-error mt-4">{{ $message }}</p>
@enderror