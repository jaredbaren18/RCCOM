
{{-- @extends('user.layout.layout')
@section('user-signin') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Red Cross | Sigin in</title>
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    @include('user.header')
    
<div class="flex flex-col items-center justify-center bg-gray-600 px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
  
    @if(session('success'))
    <span style="color:yellowgreen">{{session('success')}}</span>
    @elseif(session('failed'))
    <span style="color:red">{{session('failed')}}</span>
    @endif
    <!-- Card -->
    <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">

        <h1 class="text-2xl font-bold text-red-800 dark:text-red-500 text-center">
            RED CROSS ORIENTAL MINDORO
        </h1>
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            Go sign in
        </h2>
        <form action="{{url('auth/loggingin')}}" method="post" class="mt-8 space-y-6" action="#">
            <div>
                @csrf
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="name@company.com" autocomplete="on">
                @error('email')
                <span style="color:red">{{$message}}</span>
                <a href=""></a>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('password') is-invalid @enderror" value="{{old('password')}}" autocomplete="on">
                @error('password')
                    <span style="color:red">{{$message}}</span>
                    <a href=""></a>
                    @enderror
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600 >
                    
                </div>
                <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
                </div>
                <a href="{{url('auth/forgot-password')}}" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Lost Password?</a>
            </div>
            <button type="submit" class="w-full px-5 py-3 text-base font-medium bg-blue-500 text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 hover:text-yellow-800">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                Not registered? <a href="{{url('auth/signup')}}" class="text-primary-700 hover:underline dark:text-primary-500 hover:text-red-800">Create account</a>
            </div>
        </form>
    </div>
</div>

@include('user.layout.footer')

{{-- @endsection --}}
