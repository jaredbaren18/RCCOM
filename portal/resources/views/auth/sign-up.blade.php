<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Red Cross | Sign Up</title>
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">
    @include('user.header')
    
<div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900 md:pt-5 lg:pt-96  ">
   
    <a href="" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white lg:pt-96 ">
        <img src="" class="mr-4 h-11" alt="">
        <span>Be one of us! Register now.</span>  
    </a>
    @if(session('success'))
    <span style="color:yellowgreen">{{session('success')}}</span>
    @elseif(session('failed'))
    <span style="color:red">{{session('failed')}}</span>
    @endif
    <!-- Card -->
    <div class="w-full max-w-xl p-6 space-y-8 sm:p-8  bg-white rounded-lg shadow dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            Create a Free Account
        </h2>
        <form action="{{url('auth/register')}}" method="post" class="mt-8 space-y-6" action="#" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="Firs Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" name="user_fname" id="user_fname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_fname') is-invalid @enderror" value="{{old('user_fname')}}"  placeholder="ex.Juan" autocomplete="on">
                @error('user_fname')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="Middel Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                <input type="text" name="user_mname" id="user_mname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_mname') is-invalid @enderror" value="{{old('user_mname')}}"  placeholder="ex.Dela" autocomplete="on">
                @error('user_mname')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="Last name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" name="user_lname" id="user_lname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_lname') is-invalid @enderror" value="{{old('user_lname')}}"  placeholder="ex.Cruz" autocomplete="on">
                @error('user_lname')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                <input type="text" name="user_age" id="user_age" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_age') is-invalid @enderror" value="{{old('user_age')}}"  placeholder="ex.18" autocomplete="on">
                @error('user_age')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                <input type="date" name="user_birthday" id="user_birthday" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_birthday') is-invalid @enderror" value="{{old('user_birthday')}}"  placeholder="ex.18" autocomplete="on">
                @error('user_birthday')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                <input type="text" name="user_gender" id="user_gender" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_gender') is-invalid @enderror" value="{{old('user_gender')}}"  placeholder="ex.Male" autocomplete="on">
                @error('user_gender')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="barangay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barangay</label>
                <input type="text" name="barangay" id="barangay" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('barangay') is-invalid @enderror" value="{{old('barangay')}}"  placeholder="ex.Kalinisan" autocomplete="on">
                @error('barangay')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="municipal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipality</label>
                <input type="text" name="municipal" id="municipal" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('municipal') is-invalid @enderror" value="{{old('municipal')}}"  placeholder="Calapan" autocomplete="on">
                @error('municipal')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="user_email" id="user_email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_email')  is-invalid @enderror" value="{{old('user_email')}}"  placeholder="name@company.com" autocomplete="on">
                @error('user_email')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
           
            <div>
                <label for="user_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">user_Password</label>
                <input type="password" name="user_password" id="user_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500  @error('user_password') is-invalid @enderror" value="{{old('user_password')}}" autocomplete="on">
                @error('user_password')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                <input type="password" name="user_password_confirmation" id="user_password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_password_confirmation') is-invalid @enderror" value="{{old('user_password_confirmation')}}" autocomplete="on">
                @error('user_password_confirmation')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="profile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Profile Picture</label>
                <input type="file" name="user_profile" id="confirm-user_profile" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('user_profile') is-invalid @enderror" value="{{old('user_profile')}}" autocomplete="on">
                @error('user_profile')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600 @error('remember') is-invalid @enderror" autocomplete="on">
                </div>
                <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-gray-900 dark:text-white">I accept the <a href="#" class="text-primary-700 hover:underline dark:text-primary-500 ">Terms and Conditions</a></label>    
                </div>
                @error('remember')
                <span class="text-red-500">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 bg-blue-500">Create account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                Already have an account? <a href="{{url('auth/signin')}}" class="text-primary-700 hover:underline dark:text-primary-500">Login here</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>