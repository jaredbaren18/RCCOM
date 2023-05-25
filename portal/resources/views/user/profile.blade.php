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

  <body class="bg-indigo-200">
    @include('user.userheader')

  <section class="py-8">
    {{-- <section class="py-8 bg-cover bg-no-repeat " style="background-image: url('user/bg.jpg')"> --}}
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
    </section>

    <section class="py-2">
      <div class="mx-8 my-2 grid grid-cols-1 gap-2">
        <div class="h-auto bg-gray-100">
          <header class="bg-red-600 text-white font-semibold text-left text-xs p-4 text-center">RED CROSS MEMBERSHIP PROGRAMS</header>
        </div>
      </div>
      <div class="mx-8 grid grid-cols-1 gap-2 md:grid-cols-2">
        <div class="bg-gray-100">
          <header class="bg-gray-200 text-gray-700 font-semibold text-xs p-4">MEMBERSHIP TRANSACTION</header>
          <div class="m-4 pt-3 grid grid-cols-1 gap-2 md:grid-cols-2 text-md font-medium">
            <div class="text-gray-600">
              <h1>Account ID: <span class="text-slate-900 pl-2">USR1</span></h1>
              <h1>MEMBERSHIP ID: <span class="text-slate-900 pl-2">SLVR1</span></h1>
              <h1>CATEGORY: <span class="text-slate-900 pl-2">SILVER</span></h1>
            </div>
    
            <div class="text-gray-600">
              <h1>STATUS: <span class="text-slate-900 pl-2">ACTIVED</span></h1>
              <h1>PRICE: <span class="text-slate-900 pl-2">120</span></h1>
              <h1>VALIDITY: <span class="text-slate-900 pl-2">MAY 25, 2024</span></h1>
            </div>
          </div>
    
          <div class="p-4">
            <button class="p-2 w-full items-center justify-end text-xs bg-blue-600 hover:bg-amber-600 focus:bg-rose-500 text-white">REGISTER</button>
          </div>
        </div>
    
        <div class="h-auto bg-gray-100">
          <header class="bg-gray-200 text-gray-700 font-semibold p-4 text-xs">APPOINTMENT</header>
          <table class="table-auto m-4 w-full">
            <thead>
              <tr class="text-left">
                <th>Subject</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Consultation</td>
                <td>May 26, 2023</td>
                <td>10:00 am</td>
                <td><button class="bg-transparent text-xs hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                  PENDING
                </button></td>
              </tr>

            </tbody>
          </table>
         
          <div class="p-4">
            <button class="p-2 w-full items-center justify-end text-xs bg-blue-600 hover:bg-amber-600 focus:bg-rose-500 text-white">SET APPOINMENT</button>
            <button class="p-2 mt-2 w-full items-center justify-end text-xs bg-gray-600 hover:bg-amber-600 focus:bg-rose-500 text-white">HISTORY</button>
          </div>
      </div>

      <div class="bg-gray-100">
        <header class="bg-gray-200 text-gray-700 font-semibold text-xs p-4">BLOOD TRANSACTION</header>
        <div class="m-4 pt-3 grid grid-cols-1 gap-2 md:grid-cols-2 text-md font-medium">
          <div class="text-gray-600">
            <h1>BLOOD TYPE: <span class="text-slate-900 pl-2">A+</span></h1>
            <h1>DONATION COUNT: <span class="text-slate-900 pl-2">1</span></h1>
          </div>

          <div>
            <button class="w-full p-2 items-center justify-end text-xs bg-blue-600 hover:bg-amber-600 focus:bg-rose-500 text-white">DONATE</button>
            <button class="w-full p-2 mt-2 items-center justify-end text-xs bg-gray-600 hover:bg-amber-600 focus:bg-rose-500 text-white">HISTORY</button>
          </div> 
        </div>
      </div>

      <div class="bg-gray-100">
        <header class="bg-gray-200 text-gray-700 font-semibold text-xs p-4">VOLUNTEER PROGRAM</header>
        <div class="m-4 pt-3 grid grid-cols-1 gap-2 md:grid-cols-2 text-md font-medium">
          <div class="text-gray-600">
            <h1>STATUS: <span class="text-slate-900 pl-2">NOT A VOLUNTEER</span></h1>
          </div>

          <div>
            <button class="w-full p-2 items-center justify-end text-xs bg-blue-600 hover:bg-amber-600 focus:bg-rose-500 text-white">REGISTER</button>
            <button class="w-full p-2 mt-2 items-center justify-end text-xs bg-gray-600 hover:bg-amber-600 focus:bg-rose-500 text-white">VIEW INFORMATION</button>
          </div> 
        </div>
      </div>

    </div>

    <div class="mx-8 my-2 grid grid-cols-1 gap-2">
      <div class="h-auto bg-gray-100">
        <header class="bg-gray-200 text-gray-500 font-semibold text-left text-xs p-4 text-center">ACTIVITY LOG</header>
        
        <table class="table-auto m-4 w-full">
          <thead>
            <tr class="text-left text-gray-600">
              <th>Trace ID</th>
              <th>Description</th>
              <th>Time</th>
            

            </tr>
          </thead>
          <tbody>
            <tr class="text-gray-500">
              <td>2</td>
              <td>Requesting appointment </td>
              <td>10:00 am</td>

          </tbody>
        </table>

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