<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ORMIN RED CROSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
  </head>

  <body>
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
          <a class="rounded-2xl font-bold border bg-gradient-to-b from-yellow-300 to-yellow-500 px-4 py-2 text-center text-white hover:shadow-xl" href="#">Sign Up</a>
        </div>
      </nav>
    </header>

    

    <!-- hero section -->
    <section class="bg-cover bg-no-repeat " style="background-image: url('user/home.png')">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">

        
      <div class="flex justify-center">
        <div class="px-15 py-24 lg:w-3/4">
          <div class="w-full text-center">
            <h1 class="md:text-4xl  xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
                Welcome to <span class="text-red-600 "> RED CROSS MINDORO ORIENTAL CHAPTER</span>
              </h1>
            <div class="text-gray-200">Save Lives.
                We take pride in urging all Filipinos to take part in the heroism of the Philippine Red Cross by becoming a full-fledged member, volunteer, or donor.</div>
                <ul class="mt-4">
                    <li>
                      <a href="/get-started" class="mt-4 rounded-xl bg-gradient-to-b from-yellow-300 to-yellow-500 px-8 py-2 text-xl text-slate-900 font-bold hover:shadow-2xl">Get started!</a>
                    </li>
                  </ul>
                  

          </div>
        </div>
      </div>
    </div>
    </section>



    <section class="bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
          <div class="py-12 md:py-20">
      
            {{-- {/* Section header */} --}}
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20" data-aos="fade-up">
          <h2 class="text-5xl font-bold text-black pb-4">Save Lives. Join the Red Cross.</h2>

              <p class="text-xl text-gray-500">We take pride in urging all Filipinos to take part in the 
              heroism of the Philippine Red Cross by becoming a full-fledged member, volunteer, or donor.</p>
              <ul class="mt-4 p-3">
                <li>
                  <a href="/signin" class="btn text-white bg-red-500 hover:bg-red-800 px-6  py-3 rounded-xl">JOIN US</a>
                </li>
              </ul>
              
                
            </div>

            <div class="mb-12 flex flex-col items-center justify-center">
                <h3 class="text-3xl font-semibold">Our Services</h3>
                <div class="w-24 border-b-4 border-red-800"></div>
              </div>
            
            {{-- {/* Items */} --}}
            <div class="max-w-sm mx-auto grid gap-8 md:grid-cols-2 lg:grid-cols-3 lg:gap-16 items-start md:max-w-2xl lg:max-w-none text-center text-gray-200" data-aos-id-blocks>
      
              {{-- {/* 1st item */} --}}
              <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-anchor="[data-aos-id-blocks]" >
                <a href="/" class="block transition duration-300 ease-in-out hover:scale-110 brightness-50" aria-label="Cruip">
                  <img src="user/static/blood.png" alt=""  style="height: 200px" />
                </a>
                <h1 class="text-4xl font-bold absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">BLOOD DONATION</h1>
              </div>
      
              {{-- {/* 2nd item */} --}}
              <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                <a href="/" class="block transition duration-300 ease-in-out hover:scale-110 brightness-50" aria-label="Cruip">
                  <img src="user/static/membership.png" alt=""   style="height: 200px" />
                </a>
                <h1 class="text-4xl font-bold absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">MEMBERSHIPS</h1>
              </div>
      
              {{-- {/* 3rd item */} --}}
              <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="200" data-aos-anchor="[data-aos-id-blocks]" >
                <a href="/" class="block transition duration-300 ease-in-out hover:scale-110 brightness-50" aria-label="Cruip">
                  <img src="user/static/seminars.png" alt=""   style="height: 200px" />
                </a>
                <h1 class="text-4xl font-bold absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">SEMINARS</h1>
              </div>
      
              {{-- {/* 4th item */} --}}
              <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="300" data-aos-anchor="[data-aos-id-blocks]" >
                <a href="/" class="block transition duration-300 ease-in-out hover:scale-110 brightness-50" aria-label="Cruip">
                  <img src="user/static/training.png" alt=""  style="height: 200px" />
                </a>
                <h1 class="text-4xl font-bold absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">TRAININGS</h1>
              </div>
      
              {{-- {/* 5th item */} --}}
              <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="400" data-aos-anchor="[data-aos-id-blocks]" >
                <a href="/" class="block transition duration-300 ease-in-out hover:scale-110 brightness-50" aria-label="Cruip">
                  <img src="user/static/volunteer.png" alt=""   style="height: 200px" />
                </a>
                <h1 class="text-4xl font-bold absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">VOLUNTEERS</h1>
              </div>
      
              {{-- {/* 6th item */} --}}
              <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="500" data-aos-anchor="[data-aos-id-blocks]" >
                <a href="/" class="block transition duration-300 ease-in-out hover:scale-110 brightness-50" aria-label="Cruip">
                  <img src="user/static/other.png" alt=""  style="height: 200px" />
                </a>
                <h1 class="text-4xl font-bold absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">OTHER SERVICES</h1>
              </div>
      
            </div>
      
          </div>
        </div>
      </section>
      
   
      <!-- about us -->

      
    <section class='bg-gray-900'>

      <div class="mx-auto max-w-5xl px-6 py-16 text-center">
        {{-- <div class="py-12 md:py-15 border-t border-gray-800"> --}}

          <div class="max-w-4xl mx-auto text-center">
          <div class="text-2xl font-architects-daughter text-red-600 mb-2">MISSION & VISION</div>
          <p class="text-xl text-gray-500" >A Red Cross that</p>
            <h1 class="font-bold text-5xl text-red-600 mb-4 mt-6">Always FIRST, Always Ready, Always THERE.</h1>
            <p class="text-xl text-gray-200">Philippine Red Cross has truly become the premier humanitarian organization in the country, 
            committed to provide quality life-saving services that protect the life and dignity especially of indigent Filipinos in vulnerable situations.</p>
          
            <ul class="mt-4">
                <li>
                  <a href="/get-started"  class="btn p-3 text-white bg-red-800 hover:bg-red-500 p-xl mt-10 rounded-xl bg-red-400 w-60 h-12">READ MORE...</a>
                </li>
              </ul>
          </div>
        </div>
   
    </section>
    
      <section class="bg-white">
      <div class="mx-auto max-w-5xl px-6 py-16 text-center">
        <div class="flex flex-col items-center justify-center">
          <h2 class="text-3xl font-semibold text-gray-800">About Us</h2>
          <div class="w-24 border-b-4 border-red-400"></div>
        </div>
        <p class="mt-4 text-gray-600">
           
                <h2 class="text-red-600 text-xl font-bold">Philippine Red Cross Mindoro Oriental Chapter.</h2>
                <p>The Philippine Red Cross (PRC) is a humanitarian organization in the Philippines that provides a wide range of services and assistance to those in need. It is a member of the International Red Cross and Red Crescent Movement, which is a global network of organizations dedicated to alleviating human suffering, protecting human dignity, and promoting peace.
                <br/>
                <br/>
                    The Philippine Red Cross operates at both the national and local levels. At the local level, there are various chapters and branches of the organization spread across different cities and provinces in the Philippines. These local branches work closely with communities to deliver essential services and programs. They provide assistance during emergencies and disasters, conduct blood donation drives, offer first aid and healthcare training, conduct youth and volunteer programs, and provide various humanitarian services to vulnerable individuals and communities.
                <br/>
                <br/>
                    The local Philippine Red Cross chapters play a crucial role in responding to local needs and implementing initiatives that are tailored to the specific requirements of their respective areas. They work in coordination with the national headquarters of the Philippine Red Cross to ensure effective and efficient delivery of services and support to those in need throughout the country.</p>
              
        </p>

        {{-- <img class="mt-16 h-80 w-full rounded-md object-cover object-center shadow" src="https://source.unsplash.com/collection/190727/300x300" /> --}}
      </div>
    </section>



    <!-- Blog section -->
    <section class="container mx-auto mt-20 py-4 ">
      <div class="mb-12 flex flex-col items-center justify-center">
        <h2 class="text-3xl font-semibold text-gray-800">Latest News</h2>
        <div class="w-24 border-b-4 border-yellow-400"></div>
      </div>
      <div class="grid gap-2 md:grid-cols-4 text-center">
        <div class="relative mx-6">
          <div class="rounded-lg bg-white shadow-md">
            <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg" />
            <div class="p-6">
                <h2 class="mb-2 text-lg font-medium text-gray-800">PH RED CROSS SECRETARY GENERAL GWEN PANG TO SPEAK AT THE UN HIGH-LEVEL MEETING FOR DISASTER RISK REDUCTION IN NEW YORK
                 <br><span class="text-md text-gray-600"> PH Red Cross Secretary General Dr. Gwen Pang to speak at the UN High-Level Meeting of the Midterm Review for… </span></h2>
                <a href="#" class="text-base text-red-600">Read More </a>
              </div>
          </div>
        </div>
        <div class="relative mx-6">
          <div class="rounded-lg bg-white shadow-md">
            <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg" />
            <div class="p-6">
                <h2 class="mb-2 text-lg font-medium text-gray-800">PHILIPPINE RED CROSS GRANTS MULTIPURPOSE CASH ASSISTANCE TO 3,019 PAENG-HIT FAMILIES AND FARMERS AS PLANTING SEASON NEARS
                 <br><span class="text-md text-gray-600">Five months after Severe Tropical Storm Paeng (international name: Nalgae) flooded provinces, including numerous far-flung communities, across the country, the…</span></h2>
                <a href="#" class="text-base text-red-600">Read More </a>
              </div>
          </div>
        </div>
        <div class="relative mx-6">
          <div class="rounded-lg bg-white shadow-md">
            <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg" />
            <div class="p-6">
                <h2 class="mb-2 text-lg font-medium text-gray-800">PHILIPPINE RED CROSS EMS PERSONNEL ACROSS THE COUNTRY ON HIGH ALERT FOR HOLY WEEK EMERGENCIES
                 <br><span class="text-md text-gray-600">Holy Week is a major religious observance in the Philippines, with many Filipinos participating in various religious practices during this… </span></h2>
                <a href="#" class="text-base text-red-600">Read More </a>
              </div>
          </div>
        </div>
        <div class="relative mx-6">
          <div class="rounded-lg bg-white shadow-md">
            <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg" />
            <div class="p-6">
                <h2 class="mb-2 text-lg font-medium text-gray-800">PH RED CROSS SECRETARY GENERAL GWEN PANG TO SPEAK AT THE UN HIGH-LEVEL MEETING FOR DISASTER RISK REDUCTION IN NEW YORK
                 <br><span class="text-md text-gray-600"> PH Red Cross Secretary General Dr. Gwen Pang to speak at the UN High-Level Meeting of the Midterm Review for… </span></h2>
                <a href="#" class="text-base text-red-600">Read More </a>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-200 text-gray-200  py-10" id="contact">
        <div class="max-w-6xl mx-auto px-4 sm:px-6  ">
  
          {{-- {/* CTA box */} --}}
          <div class="relative bg-red-800 py-10 px-8 py-6 md:py-30 md:px-6" data-aos="fade-up">

            <div class="relative flex flex-col lg:flex-row justify-between items-center">
  

              <div class="mb-6 lg:mr-16 lg:mb-0 text-center lg:text-left lg:w-1/2">
                <h3 class="text-4xl font-bold text-white mb-2">SHARE YOUR FEEDBACK.</h3>
                <p class="text-xl text-purple-200 text-lg">Help us improve our service by providing your feedback.</p>
              </div>
  
              <form action="" class="w-full">
                <div class="mt-2 block pr-1">
                  <input type="text" name="name" class="w-full rounded-full border border-gray-300 p-3 shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you name" />
                </div>
                <div>
                  <textarea name="message" cols="10" rows="3" placeholder="message" class="mt-3 w-full rounded-xl border border-gray-300 p-3 shadow focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                </div>
                <div class="flex justify-center">
                  <button type="submit" class="rounded-xl bg-yellow-400 px-8 py-2 text-white">Submit</button>
                </div>
              </form>
  
             
            </div>
  
          </div>
  
        </div>
      </section>

    <!-- footer -->
    <footer>
        <div class="py-12 md:py-16 text-gray-200 bg-gray-800" id="about"  >
          <div class="max-w-6xl mx-auto px-4 sm:px-6">
  
            <div class="grid md:grid-cols-12 gap-8 lg:gap-20 mb-4 md:mb-8">
  
              <div class="md:col-span-5 lg:col-span-8">
                <div>
                  <a to="/"  aria-label="Cruip">
                  <img  class="inline-block" src="user/PRC_logo.png" alt=""  style="height: 70px" />
                  </a>
                  <img class="inline-block" src="user/ormin_logo.png" alt=""  style="height: 70px" />
                  
                </div>
                <div class="text-gray-400">
                  <h2 class="text-red-600">Philippine Red Cross Mindoro Oriental Chapter.</h2>
                  <p>
                  1947: Born officially in the revolutionary days. The Philippine National Red Cross, a member of the International Red Cross
                  and Red Crescent Movement is committed to provide quality life-saving services that protect life and dignity, epecially
                  of indigent Filipinos in vulnerable sitsuations.</p>
                </div>
              </div>
  
              <div class="md:col-span-7 lg:col-span-4 grid sm:grid-cols-2 gap-6 mt-xl">
  
                <div class="text-sm">
                  <h6 class="text-gray-200 font-medium mb-1">Address</h6>
                  <ul>
                    <li class="mb-1">
                      <p class="text-gray-400">Capitol Complex</p>
                    </li>
                    <li class="mb-1">
                      <p class="text-gray-400">Camilmil, Calapan City</p>
                    </li>
                    <li class="mb-1">
                      <p class="text-gray-400">Oriental Mindoro</p>
                    </li>
                    
                  </ul>
                </div>
  
                <div class="text-sm">
                  <h6 class="text-gray-200 font-medium mb-1">Contact</h6>
                  <ul>
                  <li class="mb-1">
                      <p class="text-gray-400">(+632) 8790-2300</p>
                    </li>
                    <li class="mb-1">
                      <p class="text-gray-400">prc@redcross.org.ph</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
            <div class="md:flex md:items-center md:justify-between">
              <ul class="flex mb-2 md:order-1 md:ml-4 md:mb-0">
                <li>
                  <a to="#" class="flex justify-center items-center text-purple-600 bg-gray-800 hover:text-gray-100 hover:bg-purple-600 rounded-full transition duration-150 ease-in-out" aria-label="Twitter">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z" />
                    </svg>
                  </a>
                </li>
                <li class="ml-4">
                  <a to="#" class="flex justify-center items-center text-purple-600 bg-gray-800 hover:text-gray-100 hover:bg-purple-600 rounded-full transition duration-150 ease-in-out" aria-label="Github">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" />
                    </svg>
                  </a>
                </li>
                <li class="ml-4">
                  <a to="#" class="flex justify-center items-center text-purple-600 bg-gray-800 hover:text-gray-100 hover:bg-purple-600 rounded-full transition duration-150 ease-in-out" aria-label="Facebook">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z" />
                    </svg>
                  </a>
                </li>
                <li class="ml-4">
                  <a to="#" class="flex justify-center items-center text-purple-600 bg-gray-800 hover:text-gray-100 hover:bg-purple-600 rounded-full transition duration-150 ease-in-out" aria-label="Instagram">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20.145" cy="11.892" r="1" />
                      <path d="M16 20c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z" />
                      <path d="M20 24h-8c-2.056 0-4-1.944-4-4v-8c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zm-8-14c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2v-8c0-.935-1.065-2-2-2h-8z" />
                    </svg>
                  </a>
                </li>
                <li class="ml-4">
                  <a to="#" class="flex justify-center items-center text-purple-600 bg-gray-800 hover:text-gray-100 hover:bg-purple-600 rounded-full transition duration-150 ease-in-out" aria-label="aedin">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                      <path d="M23.3 8H8.7c-.4 0-.7.3-.7.7v14.7c0 .3.3.6.7.6h14.7c.4 0 .7-.3.7-.7V8.7c-.1-.4-.4-.7-.8-.7zM12.7 21.6h-2.3V14h2.4v7.6h-.1zM11.6 13c-.8 0-1.4-.7-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4-.1.7-.7 1.4-1.4 1.4zm10 8.6h-2.4v-3.7c0-.9 0-2-1.2-2s-1.4 1-1.4 2v3.8h-2.4V14h2.3v1c.3-.6 1.1-1.2 2.2-1.2 2.4 0 2.8 1.6 2.8 3.6v4.2h.1z" />
                    </svg>
                  </a>
                </li>
              </ul>
  
              <div class="text-gray-400 text-sm mr-4">&copy; OrminPRC. All rights reserved.</div>
  
            </div>
  
          </div>
        </div>
      </footer>
  </body>
</html>