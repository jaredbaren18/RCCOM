<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>RED CROSS ORMIN</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!-- Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  </head>

  <body>
    @include('user.userheader')

  
    <section class="py-8 bg-cover bg-no-repeat " style="background-image: url('user/bg.jpg')">
      <div class="mx-8 grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3">
        
        <div class="col-span-1 sm:col-span-2 md:col-span-1 h-auto bg-gray-100 text-center">
          <header class="bg-gray-200 text-gray-700 font-semibold text-left text-xs p-4">PROFILE PICTURE</header>
          <div class="flex items-center justify-center p-3">
            <img class="w-48 rounded-full" src="{{asset('user/sample.jpg')}}" alt="" />
          </div>
          <button class="p-2 m-2 items-center justify-center text-xs bg-blue-600 hover:bg-amber-600 focus:bg-rose-500 text-white">Upload New Image</button>
        </div>
        
        
        
        <div class="col-span-1 sm:col-span-2 md:col-span-2 h-auto bg-gray-100">
          <header class="bg-gray-200 text-gray-700 font-semibold p-4 text-xs">ACCOUNT DETAILS</header>
        
          <div class="uppercase pt-1 text-slate-800 font-bold md:text-3xl text-xl md:text-left text-center font-bold mx-4">
            <p class="mb-1 leading-tight">John Loyd A. Salazar</p>
            <p class="text-xs text-gray-500 leading-tight">Created at May 23, 2023. 10:00 am</p>
          </div>
        
          <div class="m-4 pt-3 grid grid-cols-1 gap-2 md:grid-cols-2 text-md font-medium">
            <div class="text-gray-600">
              <h1>Account ID: <span class="text-slate-900 pl-2">USR1</span></h1>
              <h1>Birthday: <span class="text-slate-900 pl-2">DECEMBER 06, 2000</span></h1>
              <h1>Gender: <span class="text-slate-900 pl-2">MALE</span></h1>
              <h1>Status: <span class="text-slate-900 pl-2">SINGLE</span></h1>
            </div>
        
            <div class="text-gray-600">
              <h1>Contact Number: <span class="text-slate-900 pl-2">09463389376</span></h1>
              <h1>Email Address: <span class="text-slate-900 pl-2">johnlloydsalazar87@gmail.com</span></h1>
              <h1>Organization: <span class="text-slate-900 pl-2">NONE</span></h1>
              <h1>Address: <span class="text-slate-900 pl-2">Aurora, Naujan, Oriental Mindoro</span></h1>
            </div>
          </div>
        
          <div class="p-4">
            <button class="p-2 w-full items-center justify-end text-xs bg-blue-600 hover:bg-amber-600 focus:bg-rose-500 text-white">Update Information</button>
          </div>
        </div>
        
      </div>

      <div class="mx-8 grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3 mt-10">
        <div class="col-span-1 sm:col-span-2 md:col-span-1 h-30  bg-gray-100 text-center">
          <div class="text-gray-600">
            <h1>Account ID: <span class="text-slate-900 pl-2">USR1</span></h1>
            <h1>Birthday: <span class="text-slate-900 pl-2">DECEMBER 06, 2000</span></h1>
            <h1>Gender: <span class="text-slate-900 pl-2">MALE</span></h1>
            <h1>Status: <span class="text-slate-900 pl-2">SINGLE</span></h1>
          </div>
        </div>

        <div class="col-span-1 sm:col-span-2 md:col-span-2 h-30 bg-gray-100">
          <div class="text-gray-600">
            <h1>Account ID: <span class="text-slate-900 pl-2">USR1</span></h1>
            <h1>Birthday: <span class="text-slate-900 pl-2">DECEMBER 06, 2000</span></h1>
            <h1>Gender: <span class="text-slate-900 pl-2">MALE</span></h1>
            <h1>Status: <span class="text-slate-900 pl-2">SINGLE</span></h1>
          </div>
        </div>
      </div>
    </section>
    
    
          
    
      
  </body>
</html>

{{-- <section class="mt-4 py-16 bg-gray-500">
    <div class="mx-8 grid grid-cols-1 gap-4 sm:grid-cols-3 md:grid-cols-5">
   
      <div class="col-span-1 sm:col-span-2 md:col-span-3 h-4" style="background-image: url('user/home.png')">
 

      </div>

      <div class="col-span-1 sm:col-span-1 md:col-span-2 h-4 bg-teal-400"></div>
    </div>
  </section> --}}