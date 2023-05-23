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
  

    @include('user.header')

    <!-- hero section -->
    <section class="bg-cover bg-no-repeat " style="background-image: url('user/home.png')">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">

        
      <div class="flex justify-center">
        <div class="px-15 py-24 lg:w-3/4">
          <div class="w-full text-center">
            <h1 class="md:text-4xl  xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
                Welcome to <span class="text-red-600 "> RED CROSS MINDORO ORIENTAL CHAPTER</span>
              </h1>
            <div class="text-gray-200">
              Philippine Red Cross has truly become the premier humanitarian organization in the country, committed to provide quality life-saving services that protect the life and dignity especially of indigent Filipinos in vulnerable situations.
            </div>
                <ul class="mt-4">
                    <li>
                      <a href="/auth/signin" class="mt-4 rounded-xl bg-gradient-to-b from-yellow-300 to-yellow-500 px-8 py-2 text-xl text-slate-900 font-bold hover:shadow-2xl">Sign In!</a>
                    </li>
                  </ul>
                  

          </div>
        </div>
      </div>
    </div>
    </section>



    <section class="bg-white" id="services" >
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
          <div class="py-12 md:py-20">
      
            {{-- {/* Section header */} --}}
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20" data-aos="fade-up">
          <h2 class="text-5xl font-bold text-black pb-4">Save Lives. Join the Red Cross.</h2>

              <p class="text-xl text-gray-500">We take pride in urging all Filipinos to take part in the 
              heroism of the Philippine Red Cross by becoming a full-fledged member, volunteer, or donor.</p>
              <ul class="mt-4 p-3">
                <li>
                  <a href="/auth/signin" class="btn text-white bg-red-500 hover:bg-red-800 px-6  py-3 rounded-xl">JOIN US</a>
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

      
    <section class='bg-gray-900' id="about">

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
                <p>                    2010: By virtue of Republic Act 10072, the organization is now known as the Philippine Red Cross (PRC). The humanitarian organization used to involved only in providing
                  blood and disaster-related activities, as well as short-term remedies. Now it also focuses on holistic approcahes to uplift the condition of the most vulnerable, and provide a wider array of humanitarian services.</p><br>
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
    <section class="container mx-auto mt-20 py-4 " id="news">
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
    @include('user.footer')
   
  </body>
</html>