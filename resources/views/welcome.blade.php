<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">


<!-- Alert -->
@if(session('error'))
    @include('partials.alert', ['message' => session('error')])
@elseif(session('success'))
    @include('partials.success', ['message' => session('success')])
@endif
<!-- Alert -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-purple-200">
    <div class="pt-12 sm:pt-16 lg:pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl">
                    Working Fast In A Slow IDE Video Course
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Ever wondered what it feels like <b>working lightning-fast</b> in a big and powerful IDE?
                </p>
            </div>
        </div>
    </div>
    <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
        <div class="relative">
            <div class="absolute inset-0 h-1/2 bg-purple-200"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                    <div class="flex-1 bg-white px-6 py-8 lg:p-12">
                        <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
                            Pay once, benefit forever
                        </h3>
                        <p class="mt-6 text-base text-gray-500">

                        </p>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <h4 class="flex-shrink-0 pr-4 bg-white text-sm tracking-wider font-semibold uppercase text-purple-600">
                                    What's included
                                </h4>
                                <div class="flex-1 border-t-2 border-gray-200"></div>
                            </div>
                            <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <!-- Heroicon name: solid/check-circle -->
                                        <svg class="h-5 w-5 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-lg text-gray-700">
                                        The one shortcut secret
                                    </p>
                                </li>

                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <!-- Heroicon name: solid/check-circle -->
                                        <svg class="h-5 w-5 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-lg text-gray-700">
                                        Access to RocketBrains bank account
                                    </p>
                                </li>

                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <!-- Heroicon name: solid/check-circle -->
                                        <svg class="h-5 w-5 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-lg text-gray-700">
                                        The ultimate developer working suit
                                    </p>
                                </li>

                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <!-- Heroicon name: solid/check-circle -->
                                        <svg class="h-5 w-5 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-lg text-gray-700">
                                        My IDE is ned deppad stickers
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                        <p class="text-lg leading-6 font-medium text-gray-900">
                            Only today
                        </p>
                        <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-gray-900">
              <span>
                $911
              </span>
                            <span class="ml-3 text-xl font-medium text-gray-500">
                USD
              </span>
                        </div>
                        <p class="mt-4 text-sm">
                            <a href="#" class="font-medium text-gray-500 underline">
                                We do not care about policies
                            </a>
                        </p>
                        <div class="mt-6">
                            <div class="rounded-md shadow">
                                <form action="{{ route('post.checkout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="transition-all w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-purple-900 hover:text-white bg-purple-400 hover:bg-purple-500">
                                        Get Access
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="mt-4 text-sm">
                            <a href="#" class="font-medium text-gray-900">
                                No more free samples
                                <span class="font-normal text-gray-500">
                  (20MB)
                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
