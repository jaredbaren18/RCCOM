<header class="sticky top-0 bg-white border-b border-slate-200 z-30 " x-data="{ isOpen: false }">

  <nav class="container mx-auto px-8 py-4 md:flex md:items-center md:justify-between">
    <div class="flex items-center justify-between">
  
        <img class="h-10 md:h-12" src="user/adminlogo.png" alt=""/>
    
      <!-- Mobile menu button -->
      <div @click="isOpen = !isOpen" class="flex md:hidden">
        <button type="button" class="text-gray-800 hover:text-gray-400 focus:text-gray-400 focus:outline-none" aria-label="toggle menu">
          <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
          </svg>
        </button>
      </div>
    </div>

    <div :class="isOpen ? 'flex' : 'hidden'" class="mt-2 flex-col space-y-4 md:mt-0 md:flex md:flex-row md:items-center md:space-y-0 md:space-x-10">
      <a class="transform font-bold text-gray-800 hover:text-red-700" href="#">Home</a>
      <a class="transform font-bold text-gray-800 hover:text-red-700" href="#">Service</a>
      <a class="transform font-bold text-gray-800 hover:text-red-700" href="#">Contact</a>
      <a class="transform font-bold text-gray-800 hover:text-red-700" href="#">About</a>
      @if(!session('User'))
      <a class="rounded-2xl font-bold border bg-gradient-to-b from-yellow-300 to-yellow-500 px-4 py-2 text-center text-white hover:shadow-xl" href="#">Sign Up</a>
      @else
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i>Logout
            </a>
        </li>
      </ul>
      @endif
    </div>
  </nav>
</header>
