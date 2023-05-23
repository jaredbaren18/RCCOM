<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
  </head>

  <body>
    <header class="sticky top-0 bg-white border-b border-slate-200 z-30 " x-data="{ isOpen: false }">

      <nav class="container mx-auto px-8 py-4 md:flex md:items-center md:justify-between">
        <div class="flex items-center justify-between">
      
            <img href="/" class="h-10 md:h-12" src="{{asset('user/adminlogo.png')}}" alt=""/>
        
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
          <a class="transform font-bold text-gray-800 hover:text-red-700" href="/">Home</a>
          <a x-data="{ open: true }" class="transform  font-bold text-gray-800 hover:text-red-700 md:hidden" href="/#services">Services</a>
   


    <!-- Dropdown menu for desktop view -->
    <div x-data="{ open: false }" @mouseleave="open = false" class="relative hidden md:block">
        <!-- Dropdown toggle button -->
        <a
          @mouseover="open = true" 
          class="transform font-bold text-gray-800 hover:text-red-700" href="/#services"
        >
          Services
        </a>

        <!-- Dropdown menu -->
        <div
          x-show="open"
          class="absolute  w-48 py-2 bg-gray-100 rounded-md shadow-xl
          ">
        
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white"
          >
            Blood Program
          </a>
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white"
          >
            Volunteer
          </a>
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white"
          >
           Trainings and Seminars
          </a>
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white"
          >
            Appointments
          </a>
        </div>
      </div>


          <a class="transform font-bold text-gray-800 hover:text-red-700" href="/#news">News</a>
          <a class="transform font-bold text-gray-800 hover:text-red-700" href="/#contact">Contact</a>
          <a class="transform font-bold text-gray-800 hover:text-red-700" href="/#about">About</a>
          <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="/auth/signup">ACCOUNT</a>
        </div>
      </nav>
    </header>
 
  </body>
</html>