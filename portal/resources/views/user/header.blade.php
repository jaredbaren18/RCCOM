<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
          <a class="transform font-bold text-gray-800 hover:text-red-700" href="/#services">Services</a>
          <a class="transform font-bold text-gray-800 hover:text-red-700" href="/#about">About</a>
          <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="/auth/signup">Sign Up</a>
        </div>
      </nav>
    </header>
 
  </body>
</html>