<header class="bg-white p-7 sticky top-0 left-0 right-0 z-10 shadow-sm">
  <nav class="flex justify-between mx-5 items-center">
    <h1 class="text-xl font-bold text-green-600"><a href="/voting">VOTING SYSTEM</a></h1>
    <ul class="flex gap-5">
      @auth
      <li><a href="voting">Pemilihan</a></li>
      @endauth
      <li>
        @if(isset(auth()->user()->is_admin) && auth()->user()->is_admin == 1)
        <a href="/dashboard">Admin</a>
        @endif
      </li>
      <li>

        @auth
        <form action="/logout" method="post">
          @csrf
          <button type="submit">Logout</button>
        </form>

        @endauth


      </li>
    </ul>
  </nav>
</header>