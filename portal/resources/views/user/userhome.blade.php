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
    @extends('user.layout.layout')
    @section('user-home')
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            class="object-cover w-full h-50"
            src="{{asset('admin/images/bdbg.jpg')}}"
            alt="apple watch photo"
          />
        </div>
        <div class="swiper-slide">
          <img
            class="object-cover w-full h-50"
            src="{{asset('admin/images/bmbg.jpg')}}"
            alt="apple watch photo"
          />
        </div>

        <div class="swiper-slide">
            <img
              class="object-cover w-full h-50"
              src="{{asset('admin/images/mbg.jpg')}}"
              alt="apple watch photo"
            />
          </div>

          <div class="swiper-slide">
            <img
              class="object-cover w-full h-50"
              src="{{asset('admin/images/pbg.jpg')}}"
              alt="apple watch photo"
            />
          </div>
        
          <div class="swiper-slide">
            <img
              class="object-cover w-full h-50"
              src="{{asset('admin/images/vbg.jpg')}}"
              alt="apple watch photo"
            />
          </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

        <!-- Blog section -->
        <section class="container mx-auto mt-20 " id="news">
            <div class="mb-12 flex flex-col items-center">
              <h2 class="text-3xl font-semibold text-gray-800">LATEST NEWS</h2>
              <div class="w-24 border-b-4 border-red-400"></div>
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
          
          <section class="bg-cover bg-no-repeat py-12" style="background-image: url('user/home.png')">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">
          <div class="flex justify-start">
            <div class="px-15 py-24 lg:w-3/4">
              <div class="w-full">
                <h1 class="md:text-4xl  xl:text-6xl text-4xl font-bold mb-4 text-red-600" data-aos="fade-up">
                    BE A MEMBER<span class="text-white ">  AND HELP US SAVE LIVES!</span>
                  </h1>
                <div class="text-gray-200 text-xl">
                    Joining the Philippine Red Cross Membership Program gives individual self-worth as you are extending help to the most vulnerable Filipinos.

                    The Membership Fund Drive program gives you access to all services of the Philippine Red Cross in times of emergencies, sickness, and disasters.     </div>

            
                    <ul class="mt-8">
                        <li>
                          <a href="/auth/signin" class="mt-4 rounded-xl bg-gradient-to-b from-yellow-300 to-yellow-500 px-8 py-2 text-xl text-slate-900 font-bold hover:shadow-2xl">JOIN NOW!</a>
                        </li>
                      </ul>
                      
    
              </div>
            </div>
          </div>
        </div>
        </section>

        <section class="bg-cover bg-no-repeat py-12 " style="background-image: url('user/static/BLOOD.jpg')">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">
          <div class="flex justify-end">
            <div class="px-15 py-24 lg:w-3/4">
              <div class="w-full">
                <h1 class="md:text-4xl text-right xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
                    SHARE LIFE,<span class="text-red-600 ">  GIVE BLOOD!</span>
                  </h1>
                <div class="text-white text-right ml-10 text-xl">
                    The National Blood Services is the Philippine Red Cross’ arm that delivers adequate, safe and quality blood supply to the most vulnerable. Through its 88 blood service facilities nationwide, the PRC has been the leading provider of blood and blood products in the country. The PRC continuously promotes voluntary non-remunerated blood donation to attain adequacy.           </div>

                    <ul class="mt-8">
                        <li class="text-right">
                            <a href="/auth/signin" class="bg-transparent hover:bg-yellow-500 text-red-600 font-bold hover:text-white py-2 px-4 border-4 border-red-600 hover:border-transparent rounded">
                                DONATE BLOOD!
                              </a>
                              
                                
                        </li>
                      </ul>
                      
                      
    
              </div>
            </div>
          </div>
        </div>
        </section>

        <section class="bg-cover bg-no-repeat py-12 " style="background-image: url('user/static/vol.jpg')">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">
          <div class="flex justify-start">
            <div class="px-15 py-24 lg:w-3/4">
              <div class="w-full">
                <h1 class="md:text-4xl  xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
                    BE ONE OF US,<span class="text-red-600"> BE A VOLUNTEER!</span>
                  </h1>
                <div class="text-white text-xl">
                    Volunteer Service Office handles programs aim at encouraging people to become an army of volunteers of the Philippine Red Cross (PRC) by sharing their resources, time, and efforts to alleviate human suffering. 
                    It takes active charge of the administration, development, growth, and effective mobilization of volunteers in all aspects of PRC services within the chapter’s jurisdiction in particular and/or the whole country.
                </div>

                    <ul class="mt-8">
                        <li>
                            <a href="/auth/signin" class="bg-blue-600 text-xl hover:bg-white text-white font-bold hover:text-black py-2 px-4 rounded">
                                REGISTER NOW!
                              </a>
                              
                                
                        </li>
                      </ul>
                      
                      
    
              </div>
            </div>
          </div>
        </div>
        </section>
          
          
          

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
                   
                    <div>
                      <textarea name="message" cols="10" rows="3" placeholder="Leave your comment here..." class="mt-3 w-full rounded-xl border border-gray-300 p-3 shadow focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                    </div>
                    <div class="flex justify-center">
                      <button type="submit" class="rounded-xl bg-yellow-400 px-8 py-2 text-white">Submit</button>
                    </div>
                  </form>
      
                 
                </div>
      
              </div>
      
            </div>
          </section>
                              <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
          @endsection




{{-- <section class="mt-4 py-16 bg-gray-500">
    <div class="mx-8 grid grid-cols-1 gap-4 sm:grid-cols-3 md:grid-cols-5">
   
      <div class="col-span-1 sm:col-span-2 md:col-span-3 h-4" style="background-image: url('user/home.png')">
 

      </div>

      <div class="col-span-1 sm:col-span-1 md:col-span-2 h-4 bg-teal-400"></div>
    </div>
  </section> --}}