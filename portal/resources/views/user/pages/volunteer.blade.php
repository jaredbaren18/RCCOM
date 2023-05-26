@extends('user.layout.layout')

@section('user-membership')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEMBERSHIP | ORMINPRC</title>
</head>
<body>


    <div class="flex flex-col min-h-screen overflow-hidden">
      <img
      class="object-cover w-full h-50"
      src="{{asset('admin/images/vbg.jpg')}}"
      alt="apple watch photo"
    />
        <main class="grow">
     
    
  
          <div class="relative max-w-6xl mx-auto h-0 pointer-events-none" aria-hidden="true">
          </div>
  
        <section class="bg-cover bg-no-repeat py-12 " style="background-image: url('user/static/vol.jpg')">
     

        <div class="w-full w-auto px-4 sm:px-6 pt-8 md:pt-8">
         
          <div class="w-full mx-auto py-5 px-12  pb-12 justify-center md:pb-20 " data-aos="fade-up">
            <h1 class="md:text-4xl  xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
              BE ONE OF US,<span class="text-red-600"> BE A VOLUNTEER!</span>
            </h1>

            <p class="text-lg text-gray-200 ">
            Volunteer Service Office handles programs aim at encouraging people to become an army of volunteers of the Philippine Red Cross 
            by sharing their resources, time, and efforts to alleviate human suffering. 
            It takes active charge of the administration, development, growth, and effective mobilization of volunteers in all aspects of PRC 
            services within the chapter jurisdiction in particular and/or the whole country. <br /><br />
        
            While this office delivers its service through recruitment, engagement and retention of volunteers, 
            it also gives recognition to the outstanding individuals who rendered significant contribution to the organization.
         <br /><br />
         The delivery of essential services of the PRC is powered by the committed service of volunteers who unselfishly devotes time, energy, and resources in serving humanity. 
        <br /><br />
        To become a member, fill up the form or just visit our Red Cross Office
            </p>
            <ul class='py-5'>
               <li>
                <a href="/signin" 
                class="mt-4 rounded-xl bg-gradient-to-b from-yellow-300 to-yellow-500 px-8 py-2 text-xl text-slate-900 font-bold hover:shadow-2xl">
                REGISTER NOW!</a>
              </li>
            </ul>

          


          <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">
            <div class="flex justify-end">
              <div class="px-15 py-24 lg:w-3/4">
                <div class="w-full">
                  <h1 class="md:text-4xl text-right xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
                    RED CROSS,<span class="text-red-600 "> 143 PROGRAM</span>
                    </h1>
                  <div class="text-white text-right ml-10 text-xl">
                    Red Cross 143 is a community-based volunteering program of the Philippine Red Cross where one leader and a minimum of forty three (43) 
                    members form part of an active corps of capable, caring, and committed individuals. RC 143 promotes a culture of self-help in the 
                    communities by developing a formidable network of Red Cross volunteers who will predict potential risk, plan, prepare, and practice
                     for effective community based disaster risk reduction. <br />
                  
                      <ul class="mt-8">
                          <li class="text-right">
                              <a href="/auth/signin" class="bg-transparent hover:bg-yellow-500 text-red-600 font-bold hover:text-white py-2 px-4 border-4 border-red-600 hover:border-transparent rounded">
                                  REGISTER NOW!
                                </a>
                                
                                  
                          </li>
                        </ul>
                </div>
              </div>
            </div>
          </div>


          </div>
      </section>
     
    
            <section class="relative">
             
                <div class="max-w-6xl mx-auto px-4 sm:px-6">

                    <div class="py-20">
                        {{-- {/* Page header */} --}}
                        <div class="max-w-full mx-auto text-center pb-4 md:pb-8">
                            <h3 class="text-6xl font-bold text-blue-600">BE A MEMBER.</h3>
                        </div>
                        <form >

                            <p class='text-black pb-3'>Full Name</p>
                            <div class="grid md:grid-cols-2 md:gap-6">
                              <div class="relative z-0 w-full mb-6 group">
                                <input
                                    type="text"
                                    name="firstname"
                                    id="floating_first_name"
                                    autoComplete="on"
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                
                                <label for="floating_first_name" 
                              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                              First Name</label>
                            </div>
                          
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" autoComplete="on"
                           
                                        name="lastname" id="floating_last_name" 
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                       
                                        <label for="floating_last_name" 
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                        Last name</label>
                                </div>
                            </div>

                            <p class='text-black pb-3'>Address</p>
                            <div class="grid md:grid-cols-3 md:gap-6">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" autoComplete="on"
                                        name="barangay" id="floating_brgy" 
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                           <label for="floating_brgy" 
                                           class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                           Barangay</label>
                                </div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" autoComplete="on"
                                 
                                        name="municipal" id="floating_municipal"
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                              <label for="floating_municipal" 
                                              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                              Municipal</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" autoComplete="on"
                              
                                        name="zipcode" id="floating_zip" 
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_zip" 
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                        Zip Code</label>
                                </div>
                            </div>

                            <p class='text-black pb-3'>Other/s</p>
                            <div class="grid md:grid-cols-3 md:gap-6">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="number" autoComplete="on"
                             
                                        name="phone" id="floating_phone" 
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_phone" 
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                        Phone Number</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="email" autoComplete="on"
                           
                                        name="email" id="floating_email" 
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_email" 
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                        Email</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="date" autoComplete="on"
                                   
                                        name="bday" id="floating_bday" 
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_bday" 
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                        Birthday</label>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-3 md:gap-6">

                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="gender" 
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                    Gender</label>
                                    <select name='gender'
                                        autoComplete="on"

                                   
                                        id="gender" 
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <option class='text-gray-500'>---Choose here---</option>
                                        <option value="Male">Male</option>
                                        <option value='Female'>Female</option>
                                    </select>
                                </div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="blood" 
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                    Select your blood Type</label>
                                    <select id="blood" autoComplete="on"
                                        name='blood'
                                      
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <option class='text-gray-500'>---Choose here---</option>
                                        <option>Prefer not to say.</option>
                                        <option >A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="categories" 
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                    Select Member Category</label>
                                    <select id="categories"
                                        autoComplete="on"
                                        name='category'
                                    
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <option class='text-gray-500'>---Choose here---</option>
                                        <option>Classic</option>
                                        <option value="Bronze">Premiere Bronze</option>
                                        <option value="Silver">Premiere Silver</option>
                                        <option value="Gold">Premiere Gold</option>
                                        <option value="Platinum">Premiere Platinum</option>
                                        <option value="Senior">Premiere Senior</option>
                                        <option value="Seniorplus">Premiere Senior Plus</option>

                                    </select>
                                </div>

                            </div>

                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full md:w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Submit</button>
                        </form>


                    </div>
                </div>
            </section>
<section class="bg-gray-200">
            <div class="flex justify-center items-start px-12">
              <div class="w-full ">
                <h2 class="text-2xl font-semibold text-vnet-blue mt-6">FAQs VOLUNTEER</h2>
                <ul class="flex flex-col">
                  <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                    <h2
                      @click="handleClick()"
                      class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                    >
                      <span>What is Red Cross Membership Program?</span>
                      <svg
                        :class="handleRotate()"
                        class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                        viewBox="0 0 20 20"
                      >
                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                      </svg>
                    </h2>
                    <div
                      x-ref="tab"
                      :style="handleToggle()"
                      class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
                    >
                      <p class="p-3 text-gray-900">
                        Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation
                      </p>
                    </div>
                  </li>
                  <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                    <h2
                      @click="handleClick()"
                      class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                    >
                      <span>How do I track my order?</span>
                      <svg
                        :class="handleRotate()"
                        class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                        viewBox="0 0 20 20"
                      >
                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                      </svg>
                    </h2>
                    <div
                      class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
                      x-ref="tab"
                      :style="handleToggle()"
                    >
                      <p class="p-3 text-gray-900">
                        Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
                      </p>
                    </div>
                  </li>
                 
                </ul>
              </div>
            </div>
          </section>
        <script>
          document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
              tab: 0
            });
            
            Alpine.data('accordion', (idx) => ({
              init() {
                this.idx = idx;
              },
              idx: -1,
              handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
              },
              handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
              },
              handleToggle() {
                return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
              }
            }));
          })
        </script>
      
        </main>
  
       
  
      </div>

    </body>
</html>
@endsection