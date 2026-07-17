<x-layout>
  <div class=" card bg-neutral p-6 mt-6">
  <div>
     {{ $idea->description }}
  </div>

  <div class="mt-6">
    <a href="/ideas/{{ $idea->id }}/edit" 
    type="submit" class="btn btn-soft">
      Edit
    </a>
  </div>

</x-layout>