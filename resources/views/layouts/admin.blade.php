<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="/assets/img/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @vite(['resources/css/admin.css', 'resources/js/app.js'])

    @livewireStyles

    @yield('styles')

    {{--    <link rel="stylesheet" href="/assets/styles/tailwind.css"/>--}}


    <title>Dashboard | Notus JS by Creative Tim</title>
</head>
<body class="text-blueGray-700 antialiased">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">
    <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
        <div
            class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
            <button
                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded-lg border border-solid border-transparent"
                type="button"
                onclick="toggleNavbar('example-collapse-sidebar')">
                <i class="fas fa-bars"></i>
            </button>
            <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
               href="../../index.html">
                Notus JS
            </a>
            <ul class="md:hidden items-center flex flex-wrap list-none">
                <li class="inline-block relative">
                    <a class="text-blueGray-500 block py-1 px-3"
                       href="#pablo"
                       onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                    <div
                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg min-w-48"
                        id="notification-dropdown">
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                            action</a>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                            else here</a>
                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                            link</a>
                    </div>
                </li>
                <li class="inline-block relative">
                    <a class="text-blueGray-500 block"
                       href="#pablo"
                       onclick="openDropdown(event,'user-responsive-dropdown')">
                        <div class="items-center flex">
                  <span
                      class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                      <img alt="..."
                           class="w-full rounded-full align-middle border-none shadow-lg"
                           src="/assets/img/team-1-800x800.jpg"/></span></div>
                    </a>
                    <div
                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg min-w-48"
                        id="user-responsive-dropdown">
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                            action</a><a
                            href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                            else here</a>
                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                            link</a>
                    </div>
                </li>
            </ul>
            <div
                class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded-lg hidden"
                id="example-collapse-sidebar">
                <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                    <div class="flex flex-wrap">
                        <div class="w-6/12">
                            <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                               href="../../index.html">
                                Notus JS
                            </a>
                        </div>
                        <div class="w-6/12 flex justify-end">
                            <button
                                type="button"
                                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded-lg border border-solid border-transparent"
                                onclick="toggleNavbar('example-collapse-sidebar')">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <form class="mt-6 mb-4 md:hidden">
                    <div class="mb-3 pt-0">
                        <input type="text"
                               placeholder="Search"
                               class="border-0 px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-lg text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"/>
                    </div>
                </form>
                <!-- Divider -->
                <hr class="my-4 md:min-w-full"/>
                <!-- Heading -->
                <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                    Admin Layout Pages
                </h6>
                <!-- Navigation -->

                <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                    <li class="items-center">
                        <a href="{{ route('admin_dashboard') }}"
                           class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'admin_dashboard') nav-item-active @endif">
                            <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="items-center">
                        <a href="{{ route('admin_reservations') }}"
                           class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'admin_reservations') nav-item-active @endif">
                            <i class="fas fa-calendar-alt mr-2 text-sm text-blueGray-300"></i>
                            Rezervasyonlar
                        </a>
                    </li>

                    <li class="items-center">
                        <a href="./settings.html"
                           class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                            Settings
                        </a>
                    </li>

                    <li class="items-center">
                        <a href="./tables.html"
                           class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                            Tables
                        </a>
                    </li>

                    <li class="items-center">
                        <a href="./maps.html"
                           class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                            <i class="fas fa-map-marked mr-2 text-sm text-blueGray-300"></i>
                            Maps
                        </a>
                    </li>
                </ul>

                <!-- Divider -->
                <hr class="my-4 md:min-w-full"/>
                <!-- Heading -->
                <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                    Auth Layout Pages
                </h6>
                <!-- Navigation -->

                <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                    <li class="items-center">
                        <a href="../auth/login.html"
                           class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                            <i class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"></i>
                            Login
                        </a>
                    </li>

                    <li class="items-center">
                        <a href="../auth/register.html"
                           class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                            <i class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
                            Register
                        </a>
                    </li>
                </ul>

                <!-- Divider -->
                <hr class="my-4 md:min-w-full"/>
                <!-- Heading -->
                <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                    No Layout Pages
                </h6>
                <!-- Navigation -->

                <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                    <li class="items-center">
                        <a href="../landing.html"
                           class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                            <i class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"></i>
                            Landing Page
                        </a>
                    </li>

                    <li class="items-center">
                        <a href="../profile.html"
                           class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
                            <i class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"></i>
                            Profile Page
                        </a>
                    </li>
                </ul>

                <!-- Divider -->
                <hr class="my-4 md:min-w-full"/>
                <!-- Heading -->
                <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                    Documentation
                </h6>
                <!-- Navigation -->
                <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/js/colors/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fas fa-paint-brush mr-2 text-blueGray-300 text-base"></i>
                            Styles
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/js/alerts/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fab fa-css3-alt mr-2 text-blueGray-300 text-base"></i>
                            CSS Components
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/angular/overview/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fab fa-angular mr-2 text-blueGray-300 text-base"></i>
                            Angular
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fab fa-js-square mr-2 text-blueGray-300 text-base"></i>
                            Javascript
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/nextjs/overview/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fab fa-react mr-2 text-blueGray-300 text-base"></i>
                            NextJS
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/react/overview/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fab fa-react mr-2 text-blueGray-300 text-base"></i>
                            React
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/svelte/overview/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fas fa-link mr-2 text-blueGray-300 text-base"></i>
                            Svelte
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/overview/notus"
                           target="_blank"
                           class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold">
                            <i class="fab fa-vuejs mr-2 text-blueGray-300 text-base"></i>
                            VueJS
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="relative md:ml-64 bg-blueGray-50">
        <nav
            class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
            <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                <p class="text-white text-sm uppercase hidden lg:inline-block font-semibold">@yield('title')</p>
                <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                    <div class="relative flex w-full flex-wrap items-stretch">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded-lg text-base items-center justify-center w-8 pl-3 py-3"><i
                                class="fas fa-search"></i></span>
                        <input type="text"
                               placeholder="Search here..."
                               class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"/>
                    </div>
                </form>
                <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                    <a class="text-blueGray-500 block"
                       href="#pablo"
                       onclick="openDropdown(event,'user-dropdown')">
                        <div class="items-center flex">
                  <span
                      class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                          alt="..."
                          class="w-full rounded-full align-middle border-none shadow-lg"
                          src="/assets/img/team-1-800x800.jpg"
                      /></span>
                        </div>
                    </a>
                    <div
                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg min-w-48"
                        id="user-dropdown">
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                            action</a>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                            else here</a>
                        <div
                            class="h-0 my-2 border border-solid border-blueGray-100"></div>
                        <a href="#pablo"
                           class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                            link</a>
                    </div>
                </ul>
            </div>
        </nav>


        <!-- Header -->
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <!-- Card stats -->
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs">
                                                Traffic
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            350,897
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                <i class="far fa-chart-bar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 3.48%
                        </span>
                                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow-lg"
                            >
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                        >
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs"
                                            >
                                                New users
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            2,356
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                                            >
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-red-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                                        <span class="whitespace-nowrap"> Since last week </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow-lg"
                            >
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                        >
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs"
                                            >
                                                Sales
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            924
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                                            >
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-orange-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 1.10%
                        </span>
                                        <span class="whitespace-nowrap"> Since yesterday </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow-lg"
                            >
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                        >
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs"
                                            >
                                                Performance
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            49,65%
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500"
                                            >
                                                <i class="fas fa-percent"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 12%
                        </span>
                                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            @yield('content')
        </div>

        <footer class="block py-4 mt-32">
            <div class="container mx-auto px-4">
                <hr class="mb-4 border-b-1 border-blueGray-200"/>
                <div
                    class="flex flex-wrap items-center md:justify-between justify-center"
                >
                    <div class="w-full md:w-4/12 px-4">
                        <div
                            class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left"
                        >
                            Copyright © <span id="get-current-year"></span>
                            <a
                                href="https://www.creative-tim.com?ref=njs-dashboard"
                                class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1"
                            >
                                Creative Tim
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-8/12 px-4">
                        <ul
                            class="flex flex-wrap list-none md:justify-end justify-center"
                        >
                            <li>
                                <a
                                    href="https://www.creative-tim.com?ref=njs-dashboard"
                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                                >
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a
                                    href="https://www.creative-tim.com/presentation?ref=njs-dashboard"
                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                                >
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a
                                    href="http://blog.creative-tim.com?ref=njs-dashboard"
                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                                >
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a
                                    href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-dashboard"
                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                                >
                                    MIT License
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>

@livewireScripts

@yield('scripts')

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    charset="utf-8"
></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script type="text/javascript">
    /* Make dynamic date appear */
    (function () {
        if (document.getElementById("get-current-year")) {
            document.getElementById(
                "get-current-year"
            ).innerHTML = new Date().getFullYear();
        }
    })();

    /* Sidebar - Side navigation menu on mobile/responsive mode */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
    }

    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }

    (function () {
        /* Chart initialisations */
        /* Line Chart */
        var config = {
            type: "line",
            data: {
                labels: [
                    "Ocak",
                    "Şubat",
                    "Mart",
                    "Nisan",
                    "Mayıs",
                    "Haziran",
                    "Temmuz",
                    "Ağustos",
                    "Eylül",
                    "Ekim",
                    "Kasım",
                    "Aralık",
                ],
                datasets: [
                    {
                        label: new Date().getFullYear(),
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
                        data: [65, 78, 66, 44, 56, 67, 31],
                        fill: false,
                    },
                    {
                        label: new Date().getFullYear() - 1,
                        fill: false,
                        backgroundColor: "#fff",
                        borderColor: "#fff",
                        data: [40, 68, 86, 74, 56, 60, 31],
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                title: {
                    display: false,
                    text: "Rezervasyon Sayısı",
                    fontColor: "white",
                },
                legend: {
                    labels: {
                        fontColor: "white",
                    },
                    align: "end",
                    position: "bottom",
                },
                tooltips: {
                    mode: "index",
                    intersect: false,
                },
                hover: {
                    mode: "nearest",
                    intersect: true,
                },
                scales: {
                    xAxes: [
                        {
                            ticks: {
                                fontColor: "rgba(255,255,255,.7)",
                            },
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Ay",
                                fontColor: "white",
                            },
                            gridLines: {
                                display: false,
                                borderDash: [2],
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.3)",
                                zeroLineColor: "rgba(0, 0, 0, 0)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2],
                            },
                        },
                    ],
                    yAxes: [
                        {
                            ticks: {
                                fontColor: "rgba(255,255,255,.7)",
                            },
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Sayı",
                                fontColor: "white",
                            },
                            gridLines: {
                                borderDash: [3],
                                borderDashOffset: [3],
                                drawBorder: false,
                                color: "rgba(255, 255, 255, 0.15)",
                                zeroLineColor: "rgba(33, 37, 41, 0)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2],
                            },
                        },
                    ],
                },
            },
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

        /* Bar Chart */
        config = {
            type: "bar",
            data: {
                labels: [
                    "Ocak",
                    "Şubat",
                    "Mart",
                    "Nisan",
                    "Mayıs",
                    "Haziran",
                    "Temmuz",
                ],
                datasets: [
                    {
                        label: new Date().getFullYear(),
                        backgroundColor: "#ed64a6",
                        borderColor: "#ed64a6",
                        data: [30, 78, 56, 34, 100, 45, 13],
                        fill: false,
                        barThickness: 8,
                    },
                    {
                        label: new Date().getFullYear() - 1,
                        fill: false,
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
                        data: [27, 68, 86, 74, 10, 4, 87],
                        barThickness: 8,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                title: {
                    display: false,
                    text: "Orders Chart",
                },
                tooltips: {
                    mode: "index",
                    intersect: false,
                },
                hover: {
                    mode: "nearest",
                    intersect: true,
                },
                legend: {
                    labels: {
                        fontColor: "rgba(0,0,0,.4)",
                    },
                    align: "end",
                    position: "bottom",
                },
                scales: {
                    xAxes: [
                        {
                            display: false,
                            scaleLabel: {
                                display: true,
                                labelString: "Ay",
                            },
                            gridLines: {
                                borderDash: [2],
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.3)",
                                zeroLineColor: "rgba(33, 37, 41, 0.3)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2],
                            },
                        },
                    ],
                    yAxes: [
                        {
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Sayı",
                            },
                            gridLines: {
                                borderDash: [2],
                                drawBorder: false,
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.2)",
                                zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2],
                            },
                        },
                    ],
                },
            },
        };
        ctx = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
    })();
</script>
</body>
</html>
