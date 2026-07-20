<x-layout>
  <form action="/register" method="POST">
    @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
  <legend class="fieldset-legend">Register</legend>

  <label class="label">Name</label>
  <input  class="input" name="name" placeholder="Your Name" required/>
  <x-forms.error name="name"/>

  <label class="label">Email</label>
  <input type="Email" class="input" name="email" placeholder="Your Email" required />
  <x-forms.error name="email"/>
  <label class="label">Password</label>
  <input type="password" class="input" name="password" placeholder="Your Password" required />
  <x-forms.error name="password"/>



  <button  class="btn btn-neutral mt-4">Register</button>
  </fieldset>
  </form>
</x-layout>