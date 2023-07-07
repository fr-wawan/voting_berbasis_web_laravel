<aside class="hidden xl:block">
  <div class="bg-gray-900 fixed top-20 bottom-0 h-full w-56 p-3 px-8 ">
    <div class="mb-8 mt-3">
      <p class="text-gray-500 text-sm font-bold">DASHBOARD</p>
      <div class="flex text-gray-400 mt-5 gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tabler" width="24" height="24"
          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M8 9l3 3l-3 3"></path>
          <path d="M13 15l3 0"></path>
          <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
        </svg>
        <a href="/dashboard" class="{{ Request::is('dashboard') ? 'text-white' : '' }}">Dashboard</a>

      </div>
    </div>
    <div class="mb-8">
      <p class="text-sm font-bold text-gray-500">MASTER DATA</p>
      <div class="flex text-gray-400 mt-5 gap-3 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-box-bottom-left" width="24"
          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
          <path d="M7 15v2"></path>
          <path d="M10 11v6"></path>
          <path d="M13 13v4"></path>
        </svg>
        <a href="/pemilihan" class="{{ Request::is('pemilihan*') ? 'text-white' : '' }}">Pemilihan</a>
      </div>
      <div class="flex text-gray-400 mt-7 gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="24" height="24"
          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
          <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
          <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
          <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
          <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
          <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
        </svg>
        <a href="{{ route('kandidat.index') }}" class="{{ Request::is('kandidat*') ? 'text-white' : '' }}">Kandidat</a>
      </div>
    </div>
    <div class="mb-5">
      <p class="text-gray-500 text-sm font-bold">USER SYSTEM</p>
      <div class="flex text-gray-400 mt-5 gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24"
          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
          <path d="M16 19h6"></path>
          <path d="M19 16v6"></path>
          <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
        </svg>
        <a href="{{ route('pemilih.index') }}" class="{{ Request::is('pemilih') ? 'text-white' : '' }}">Pemilih</a>
      </div>

    </div>
  </div>
</aside>