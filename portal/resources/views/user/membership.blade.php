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
      src="{{asset('admin/images/mbg.jpg')}}"
      alt="apple watch photo"
    />
        <main class="grow">
    

          <section class="bg-cover bg-no-repeat py-12" style="background-image: url('user/home.png')">

        <div class="w-full w-auto px-4 sm:px-6 pt-8 md:pt-8">
         
            <div class="w-3/4 mx-auto  pb-12 justify-center md:pb-20 " data-aos="fade-up">

              <h1 class="md:text-4xl  xl:text-6xl text-4xl font-bold mb-4 text-red-600" data-aos="fade-up">
                RED CROSS <span class="text-gray-300 ">   ORIENTAL MINDORO CHAPTER</span>
              </h1>

              <div class="text-gray-400 text-xl">

              Joining the Philippine Red Cross Membership Program gives an
          individual self-worth as you are extending help to the most vulnerable
          Filipinos. <br /><br />
          Philippine Red Cross Membership is a form of donation that has
          accident assistance benefits intended for anyone between 5-85 years
          old. As a member, an individual is entitled to accidental death,
          disablement and dismemberment, hospitalization and burial
          reimbursements. <br /><br />
          Membership fund drive program gives you access to all services of
          Philippine Red Cross in times of emergencies, sickness and disasters.
          <br /><br />
          To become a member, register now or just visit our nearest PRC Chapter
          in your area.
              </p>
              <ul>
                 <li class="mt-4">
                  <a href="/signin" 
                  class="rounded-xl bg-gradient-to-b from-yellow-300 to-yellow-500 px-8 py-2 text-xl text-slate-900 font-bold hover:shadow-2xl">JOIN NOW!</a>                </li>
              </ul>
            </div>
        </div>
      </section>
     
      <section class="bg-gray-700 text-gray-200">
        <div class="flex mb-4">
            <div class="w-full bg-red-500 h-6"></div>
        </div>

        <div class="w-full w-auto px-4 sm:px-6">
            <div class="py-12 md:py-15 border-t border-gray-500">

            <h1 class="h1 text-gray-200 text-center  py-5">MEMBERSHIP CATEGORIES</h1>
                {{-- {/* Items */} --}}
                <div class=" text-gray-200 max-w-md mx-auto grid gap-2 md:grid-cols-3 lg:grid-cols-3 md:max-w-xl lg:max-w-full text-center px-10" data-aos-id-blocks>
                    {{-- {/* 1nd item */} --}}
                    <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                        <div class="block transition duration-300 ease-in-out hover:scale-125" aria-label="Cruip">
                            <img  width="100" src="{{asset('user/categories/classic.png')}}" alt=""  />


                        </div>
                        <h3 class="h3 text-red-600">CLASSIC</h3>
                        <p class='h5 text-red-500'> Ages 5-25 years old <br />
                            <strong>Php 150.00</strong></p>

                        <p class='text-sm pt-5'>
                            PHP 12,000.00<br />
                            ACCIDENTAL DEATH, DISABLEMENT & DISMEMBERMENT
                            <br /><br />
                            PHP 12,000.00<br />
                            UNPROVOKED MURDER & ASSAULT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL MEDICAL REIMBURSEMENT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL BURIAL ASSISTANCE
                            <br /><br />
                            PHP 150.00<br />
                            HOSPITAL DAILY ALLOWANCE PER DAY (MAX OF 60 DAYS)<br /><br />
                        </p>
                    </div>

                    {{-- {/* 2nd item */} --}}
                    <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                      <div class="block transition duration-300 ease-in-out hover:scale-125" aria-label="Cruip">
                        <img src="{{asset('user/categories/bronze.png')}}" alt="" width="200" />
                    </div>

                        <h3 class="h3 text-red-600">PREMIERE BRONZE</h3>
                        <p class='h5 text-red-500'> Ages 5-65 years old <br />
                            <strong>Php 150.00</strong></p>

                        <p class='text-sm pt-5'>
                            PHP 35,000.00<br />
                            ACCIDENTAL DEATH, DISABLEMENT & DISMEMBERMENT
                            <br /><br />
                            PHP 35,000.00<br />
                            UNPROVOKED MURDER & ASSAULT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL MEDICAL REIMBURSEMENT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL BURIAL ASSISTANCE
                            <br /><br />
                            PHP 150.00<br />
                            HOSPITAL DAILY ALLOWANCE PER DAY (MAX OF 60 DAYS)<br /><br />
                        </p>
                    </div>

                    {{-- {/* 3rd item */} --}}
                    <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                        <div class="block transition duration-300 ease-in-out hover:scale-125" aria-label="Cruip">
                            <img src="{{asset('user/categories/silver.png')}}" alt=""  width="200" />
                        </div>
                        <h3 class="h3 text-red-600">PREMIERE SILVER</h3>
                        <p class='h5 text-red-500'> Ages 5-65 years old <br />
                            <strong>Php 150.00</strong></p>

                        <p class='text-sm pt-5'>
                            PHP 100,000.00<br />
                            ACCIDENTAL DEATH, DISABLEMENT & DISMEMBERMENT
                            <br /><br />
                            PHP 100,000.00<br />
                            UNPROVOKED MURDER & ASSAULT
                            <br /><br />
                            PHP 10,000.00<br />
                            ACCIDENTAL MEDICAL REIMBURSEMENT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL BURIAL ASSISTANCE
                            <br /><br />
                            PHP 200.00<br />
                            HOSPITAL DAILY ALLOWANCE PER DAY (MAX OF 60 DAYS)<br /><br />
                        </p>
                    </div>

                    {{-- {/* 4th item */} --}}
                    <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                        <div class="block transition duration-300 ease-in-out hover:scale-125" aria-label="Cruip">
                          <img src="{{asset('user/categories/gold.png')}}" alt=""  width="200"  />
                        </div>
                        <h3 class="h3 text-red-600">PREMIERE GOLD</h3>
                        <p class='h5 text-red-500'> Ages 5-65 years old <br />
                            <strong>Php 150.00</strong></p>

                        <p class='text-sm pt-5'>
                            PHP 200,000.00<br />
                            ACCIDENTAL DEATH, DISABLEMENT & DISMEMBERMENT
                            <br /><br />
                            PHP 200,000.00<br />
                            UNPROVOKED MURDER & ASSAULT
                            <br /><br />
                            PHP 10,000.00<br />
                            ACCIDENTAL MEDICAL REIMBURSEMENT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL BURIAL ASSISTANCE
                            <br /><br />
                            PHP 200.00<br />
                            HOSPITAL DAILY ALLOWANCE PER DAY (MAX OF 60 DAYS)<br /><br />
                        </p>
                    </div>

                    {{-- {/* 5th item */} --}}
                    <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                        <div class="block transition duration-300 ease-in-out hover:scale-125" aria-label="Cruip">
                          <img src="{{asset('user/categories/platinum.png')}}" alt=""  width="200"  />
                        </div>
                        <h3 class="h3 text-red-600">PREMIERE PLATINUM</h3>
                        <p class='h5 text-red-500'> Ages 5-65 years old <br />
                            <strong>Php 150.00</strong></p>

                        <p class='text-sm pt-5'>
                            PHP 300,000.00<br />
                            ACCIDENTAL DEATH, DISABLEMENT & DISMEMBERMENT
                            <br /><br />
                            PHP 300,000.00<br />
                            UNPROVOKED MURDER & ASSAULT
                            <br /><br />
                            PHP 10,000.00<br />
                            ACCIDENTAL MEDICAL REIMBURSEMENT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL BURIAL ASSISTANCE
                            <br /><br />
                            PHP 200.00<br />
                            HOSPITAL DAILY ALLOWANCE PER DAY (MAX OF 60 DAYS)<br /><br />
                        </p>
                    </div>

                    {{-- {/* 6th item */} --}}
                    <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                        <div class="block transition duration-300 ease-in-out hover:scale-125" aria-label="Cruip">
                          <img src="{{asset('user/categories/senior.png')}}" alt=""   width="200"/>
                        </div>
                        <h3 class="h3 text-red-600">PREMIERE SENIOR</h3>
                        <p class='h5 text-red-500'> Ages 66-80 years old <br />
                            <strong>Php 150.00</strong></p>

                        <p class='text-sm pt-5'>
                            PHP 50,000.00<br />
                            ACCIDENTAL DEATH, DISABLEMENT & DISMEMBERMENT
                            <br /><br />
                            PHP 50,000.00<br />
                            UNPROVOKED MURDER & ASSAULT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL MEDICAL REIMBURSEMENT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL BURIAL ASSISTANCE
                            <br /><br />
                            PHP 100.00<br />
                            HOSPITAL DAILY ALLOWANCE PER DAY (MAX OF 60 DAYS)<br /><br />
                        </p>
                    </div>

                    {{-- {/* 7th item */} --}}
                    <div class="relative flex flex-col items-center relative" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="[data-aos-id-blocks]" >
                        <div class="block transition duration-300 ease-in-out hover:scale-125" aria-label="Cruip">
                          <img src="{{asset('user/categories/plus.png')}}" alt=""   width="200"/>
                        </div>
                        <h3 class="h3 text-red-600">PREMIERE SENIOR PLUS</h3>
                        <p class='h5 text-red-500'> Ages 81-85 years old <br />
                            <strong>Php 150.00</strong></p>

                        <p class='text-sm pt-5'>
                            PHP 50,000.00<br />
                            ACCIDENTAL DEATH, DISABLEMENT & DISMEMBERMENT
                            <br /><br />
                            PHP 50,000.00<br />
                            UNPROVOKED MURDER & ASSAULT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL MEDICAL REIMBURSEMENT
                            <br /><br />
                            PHP 5,000.00<br />
                            ACCIDENTAL BURIAL ASSISTANCE
                            <br /><br />
                            PHP 100.00<br />
                            HOSPITAL DAILY ALLOWANCE PER DAY (MAX OF 60 DAYS)<br /><br />
                        </p>
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
                <h2 class="text-2xl font-semibold text-vnet-blue mt-6">FAQs MEMBERSHIP</h2>
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