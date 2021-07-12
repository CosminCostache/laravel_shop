<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ in_array(app()->getLocale(), ['ar', 'az', 'dv', 'fa', 'he', 'ku', 'ur']) ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Web Design Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('aimeos_styles')
    @yield('aimeos_header')
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-gray-900 p-6">
    <div class="flex items-center flex-no-shrink text-white mr-6">
        <a href="/">
            <img src="https://www.dcwebdesign.ro/crm/uploads/company/logo.png" alt="DC logo">
        </a>
    </div>
    <div class="block lg:hidden">
        <button
            class="flex items-center px-3 py-2 border rounded text-white hover:text-white hover:border-white">
            <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
    <div class="w-full flex lg:flex-center lg:items-end lg:w-auto">
        <a class="block self-center lg:inline-block lg:mt-0 text-white hover:text-white mr-4"
           href="/">Acasa</a>
        <a class="block self-center lg:inline-block lg:mt-0 text-white hover:text-white mr-4"
           href="/shop">Shop</a>
        <a class="block self-center lg:inline-block lg:mt-0 text-white hover:text-white mr-4"
           href="/blog">Blog</a>
        <a class="block self-center lg:inline-block lg:mt-0 text-white hover:text-white mr-4"
           href="/contact">Contact</a>
    </div>
    <div class="w-full flex lg:flex-end lg:items-end lg:w-auto">
        @if (Auth::guest())
            <a class="block self-center lg:inline-block lg:mt-0 text-white hover:text-white mr-4"
               href="/login">Login</a>
        @else
            <a class="block self-center lg:inline-block lg:mt-0 text-white hover:text-white mr-4"
               href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}"
               title="Profile">Account</a>
            <form id="logout" action="/logout" method="POST">{{csrf_field()}}</form>
            <a class="block self-center lg:inline-block lg:mt-0 text-white hover:text-white mr-4"
               href="javascript: document.getElementById('logout').submit();">Logout</a>
        @endif
        @yield('aimeos_head')
    </div>
</nav>

<div class="content">
    @yield('aimeos_stage')
    @yield('aimeos_nav')
    @yield('aimeos_body')
    @yield('aimeos_aside')
    @yield('content')
    @yield('page')
</div>

<footer class="bg-gray-800 pt-10 sm:mt-10 pt-10">
    <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
        <!-- Col-1 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                <a href="/">
                    <img src="https://www.dcwebdesign.ro/crm/uploads/company/logo.png" alt="DC logo">
                </a>
            </div>
        </div>

        <!-- Col-2 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Menu
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Despre noi
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Portofoliu
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Servicii
            </a>
        </div>

        <!-- Col-3 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Link-uri utile
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Politica de confidentialitate
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Termeni si conditii
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Politica Cookies
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                ANPC
            </a>
        </div>

        <!-- Col-3 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Contact
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Adresa: Str. Idependentei 10
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Tel: 07300.78.221
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                email: office@dc-shop.ro
            </a>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="pt-2">
        <div class="flex pb-5 px-3 m-auto pt-5
            border-t border-gray-500 text-gray-400 text-sm
            flex-col md:flex-row max-w-6xl">
            <div class="mt-2">
                © Copyright 2021. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/combine/npm/jquery@3,npm/bootstrap@4"></script>
@yield('aimeos_scripts')
</body>
</html>
