<x-layout>
@if ($ideas->count())
  <div class="mt-6 text-white">
    <h2 class="font-bold">
      Your Ideas
    </h2>
    <ul>
      @foreach ($ideas as $idea)
        <!-- FIXED: Changed text-small to text-sm for Tailwind CSS -->
        <a href="/ideas/{{ $idea->id }}" class="text-sm"> {{ $idea->description }}</li>
      @endforeach
    </ul>
  </div>
  @else
  <p>NO ideas yet.<a href="/ideas/create" class="underline">Create a new one</a></p>
@endif
</x-layout>