<div class="navbar bg-base-100 shadow-sm">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> 
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> 
        </svg>
      </div>
      <!-- Mobile Dropdown Menu -->
      <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a href="/ideas">Home</a></li>
        <li><a href="/ideas/create">New Idea</a></li>
        @can('view-admin')
            <li><a href="/admin">Admin</a></li> <!-- Fixed: Wrapped and added closing </a> -->
        @endcan
      </ul>
    </div>
    <a href="/ideas" class="btn btn-ghost text-xl">Ideas</a>
  </div>
  
  <!-- Desktop Menu -->
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="/ideas">Home</a></li>
      <li><a href="/ideas/create">New Idea</a></li>
      @can('view-admin')
        <li><a href="/admin">Admin</a></li> <!-- Fixed: Wrapped and added closing </a> -->
      @endcan
    </ul>
  </div>
  
  <div class="navbar-end">
    @guest
        <a href="/register" class="btn btn-primary mr-4">Register</a>
        <a href="/login" class="btn btn-secondary">Log-in</a>
    @endguest
    @auth
      <form method="POST" action="/logout">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-ghost">
          Log Out
        </button>
      </form>
    @endauth
  </div>
</div>