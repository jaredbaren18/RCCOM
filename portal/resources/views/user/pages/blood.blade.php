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
      
        <main class="grow">
     
    
  
          <div class="relative max-w-6xl mx-auto h-0 pointer-events-none" aria-hidden="true">
          </div>
  
        <section class="bg-cover bg-no-repeat py-12 " style="background-image: url('user/static/BLOOD.jpg')">

            <div class="w-full w-auto sm:px-6 pt-8 md:pt-8">
  
            
              <div class="w-3/4 mx-auto  pb-12  md:pb-20 " data-aos="fade-up">
                <h1 class="md:text-4xl xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
                  SHARE LIFE,<span class="text-red-600 ">  GIVE BLOOD!</span>
                </h1>

                <p class="text-lg text-gray-100 ">
                  The National Blood Services is the Philippine Red Cross arm that delivers adequate, safe and quality blood supply to the most vulnerable. Through its 88 blood service facilities nationwide, the PRC has been the leading provider of blood and blood products in the country. The PRC continuously promotes voluntary non-remunerated blood donation to attain adequacy.
                </p>
                <ul>
                  <li>
                    <a href="/signin" class="btn text-white bg-red-500 hover:bg-red-800 mb-2 mt-4  rounded-xl bg-red-400 w-60 h-12">GIVE BLOOD!</a>
                  </li>
                </ul>
              </div>
  
              <div>
                <h1 class="text-center md:text-4xl xl:text-6xl text-4xl font-bold mb-4 text-white" data-aos="fade-up">
                  PROGRAMS
                </h1>

              </div>
              <div class="grid md:grid-cols-2 md:gap-6 mx-12">
                <div class="relative z-0 w-full mb-6 group">
                  <p class="text-lg text-slate-200 ">
                    <strong>Donor Recruitment and Retention</strong><br /> <span>
                      To meet the increasing demand for blood and augment the national blood requirement,
                      the PRC conducts education and recruitment sessions to encourage regular voluntary blood donations
                      from communities, different companies, organizations, colleges and universities nationwide.
                    </span>
                  </p>
                </div>
  
                <div class="relative z-0 w-full mb-6 group">
                  <p class="text-lg text-slate-200">
                    <strong>Blood Collection</strong><br /> <span>With different PRC blood service facilities strategically located in the entire country, the PRC collects blood from voluntary, non-remunerated blood donors with their donations accounting to almost 50% share of the nation blood supply.
                    </span></p>
                </div>
  
                <div class="relative z-0 w-full mb-6 group">
                  <p class="text-lg text-slate-200">
                    <strong>Blood Component Processing</strong><br /> <span>Whole blood donations are separated into components using a special equipment to generate one unit each of red blood cells, plasma and platelets. Thus, one donation can help save three lives.
                    </span></p>
                </div>
  
                <div class="relative z-0 w-full mb-6 group">
                  <p class="text-lg text-slate-200">
                    <strong>Blood Storage and Issuance</strong><br /> <span>Once blood is suitable for transfusion, blood is stored in a temperature controlled blood bank refrigerator. Clients or patients needing blood for transfusion may request from any PRC blood facilities upon presentation of blood request form issued by the hospital or physician.
                    </span></p>
                </div>
  
              </div>
  
            </div>
  
          </section>

          <section class="bg-gray-200">
            <div class="flex justify-center items-start px-12">
              <div class="w-full ">
                <h2 class="md:text-6xl font-semibold text-vnet-blue mt-6 text-2xl">HOW TO DONATE</h2>
                <ul class="flex flex-col">
                  <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                    <h2
                      @click="handleClick()"
                      class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                    >
                      <span>How often can a person donate?</span>
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
                        A healthy individual may donate every three months.  </p>
                    </div>
                  </li>
                  <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                    <h2
                      @click="handleClick()"
                      class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                    >
                      <span>Will donating blood make a person weak?</span>
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
                        No, it will not make you weak. Donating 450cc will not cause any ill effects or weakness. The human body has the capacity to compensate with the new fluid volume. Further, the bone marrow is stimulated to produce new blood cells which in turn makes the blood forming organs function more effectively.        </p>
                    </div>
                  </li>
                 
                </ul>
              </div>
            </div>
          </section>
     
    
            <section class="relative">
             
                <div class="max-w-6xl mx-auto px-4 sm:px-6">

                    <div class="py-20">
                        {{-- {/* Page header */} --}}
                        <div class="max-w-full mx-auto text-center pb-4 md:pb-8">
                            <h3 class="text-6xl font-bold text-blue-600">REGISTRATION FORM</h3>
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