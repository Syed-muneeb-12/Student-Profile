    <x-layout>
  <form action="/ideas" method="POST">
    @csrf
  <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
  <legend class="fieldset-legend">Add a new Idea!</legend>
   <label class="label">Description</label>
  <div class="mt-2">
      <textarea placeholder="Your Ideas" id="description" name="description" rows="3" class="textarea w-full @error ('description') textarea-error  @enderror"></textarea>
        <x-forms.error name="description"></x-forms.error>
      </div>


  <button  type="submit" class="btn btn-neutral mt-4">Create</button>
  </fieldset>
  </form>
</x-layout>
