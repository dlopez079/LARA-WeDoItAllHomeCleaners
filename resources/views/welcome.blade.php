<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>We Do All Home Cleaners</title>

    {{--  Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- AlphineJS --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>

</head>

<body class="antialiased">

    {{-- Hero Section --}}
    <section class="relative bg-white overflow-hidden">

        {{-- Absolute Background --}}
        <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
            <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784"
                fill="none" viewBox="0 0 640 784">
                <defs>
                    <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-teal-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect y="72" width="640" height="640" class="text-teal-50" fill="currentColor" />
                <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
            </svg>
        </div>

        {{-- This div sits in front of the aboslute background. --}}
        <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">

                <div class="lg:grid lg:grid-cols-12 lg:gap-8">

                    {{-- Main Text Section --}}
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                        <h1>
                            <span
                                class="block text-sm font-semibold uppercase tracking-wide text-teal-500 sm:text-base lg:text-sm xl:text-base">Coming
                                soon</span>
                            <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                                <span class="block text-teal-900">We Do All</span>
                                <span class="block text-teal-600">Home Cleaning</span>
                            </span>
                        </h1>
                        <p class="mt-3 text-base text-teal-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">If you don't have time to clean, We Do It All Home Cleaning is here to help.  Let us clean your kitchen, bathroom, bedroom, living room, and dining room.  We travel throughout the city with our excellent cleaning products and instruments to ensure that your home remains pristine.  We guarantee your life will be easier and more enjoyable.
                        </p>

                    </div>

                    {{-- Main Image Section --}}
                    <div
                        class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                        <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden"
                            width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                            <defs>
                                <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
                                    patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-teal-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect y="72" width="640" height="640" class="text-teal-50" fill="currentColor" />
                            <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                        </svg>
                        <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                            <div 
                                class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                <span class="sr-only">Watch our video to learn more</span>
                                <img class="w-full"
                                    src="{{ asset('img/maid-house-teal.svg') }}"
                                    alt="Company Logo">
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        </div>

    </section>

    {{-- About --}}
    <section>
        {{-- <!-- This example requires Tailwind CSS v2.0+ --> --}}
        <div class="relative bg-teal-800">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100"
                    alt="">
                <div class="absolute inset-0 bg-teal-800 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">About Us</h1>
                <p class="mt-6 text-xl text-teal-100 max-w-3xl">"We Do It All Home Cleaning" is a service that pervades cleaning for all size homes.   Whether it's just a regular cleaning or a special event, we are there to make sure that your home represents elegance and class.   We can help you design, organize, and sanitize if you are preparing for an occasion.  Our ten-plus years of experience assures that we will meet all your needs. </p>
            </div>
        </div>

    </section>

    {{-- Testimonials --}}
    <section>
        {{-- <!-- This example requires Tailwind CSS v2.0+ --> --}}
        <section class="py-12 bg-teal-50 overflow-hidden md:py-20 lg:py-24">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"
                    width="404" height="404" fill="none" viewBox="0 0 404 404" role="img"
                    aria-labelledby="svg-wedoitallhomecleaning">
                    <title id="svg-wedoitallhomecleaning">wedoitallhomecleaning</title>
                    <defs>
                        <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-teal-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
                </svg>

                <div class="relative">
                    <h1>
                        <span
                            class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl text-center">
                            <span class="block text-teal-600">Testimonials</span>
                        </span>
                    </h1>

                    <blockquote class="mt-10">
                        <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-teal-900">
                            <p>&ldquo;Highly recommend We Do It All Home Cleaning. Milca is wonderful! She’s thorough,
                                efficient and flexible..&rdquo;</p>
                        </div>
                        <footer class="mt-8">
                            <div class="md:flex md:items-center md:justify-center">
                                <div class="md:flex-shrink-0">
                                    <img class="mx-auto h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                    <div class="text-base font-medium text-teal-900">Nisa Petrilli</div>

                                    <svg class="hidden md:block mx-1 h-5 w-5 text-teal-600" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path d="M11 0h3L9 20H6l5-20z" />
                                    </svg>

                                    <div class="text-base font-medium text-teal-500">Realtor</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>

    </section>

    {{-- Award Winning Cleaning --}}
    <section>
        {{-- <!-- This example requires Tailwind CSS v2.0+ --> --}}
        <div class="relative bg-teal-800">
            <div class="h-56 bg-teal-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1627905646269-7f034dcc5738?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
                <div class="md:ml-auto md:w-1/2 md:pl-10">
                    <h2 class="text-base font-semibold uppercase tracking-wider text-teal-300">Award winning cleaning
                    </h2>
                    <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">We’re here to clean your home
                    </p>
                    <p class="mt-3 text-lg text-teal-300">We’re here to clean and help you feel at ease when you come home.  Reward yourself with the fragrance of relaxation every time you walk through your door by making an appointment with us as soon as you can.  Let us create the zen-like experience that you always desired.</p>
                    <div class="mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <a href="mailto:wedoitall.hc33@yahoo.com"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-teal-900 bg-white hover:bg-teal-50">
                                Email Us
                                {{-- <!-- Heroicon name: solid/external-link --> --}}
                                <svg class="-mr-1 ml-3 h-5 w-5 text-teal-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                    <path
                                        d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- Constact Us --}}
    <section>
        {{-- <!-- This example requires Tailwind CSS v2.0+ --> --}}
        <section class="py-12 bg-teal-50 overflow-hidden md:py-20 lg:py-24">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"
                    width="404" height="404" fill="none" viewBox="0 0 404 404" role="img"
                    aria-labelledby="svg-wedoitallhomecleaning">
                    <title id="svg-wedoitallhomecleaning">We Do It All Home Cleaning</title>
                    <defs>
                        <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-teal-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
                </svg>

                <div class="relative">
                    <h1>
                        <span
                            class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl text-center">
                            <span class="block text-teal-600">Contact Us</span>
                        </span>
                    </h1>

                    <blockquote class="mt-10">
                        <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-teal-900">
                            <p>Schedule an appointment</p>
                        </div>
                        <footer class="mt-8">
                            <div class="md:flex md:items-center md:justify-center">
                                <div class="md:flex-shrink-0">
                                    <img class="mx-auto h-10 w-10 rounded-full"
                                        src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.6435-9/151260958_138673488118862_3224695892452085682_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=tLDnoRSXPYcAX-pwJJ6&_nc_ht=scontent-mia3-2.xx&oh=00_AT-djJke8Ri3YDqIZd9x2uyqoQ3ElGhNA5emw7v4L0JvWA&oe=62AD661F"
                                        alt="">
                                </div>
                                <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                    <div class="text-base font-medium text-teal-900">Milca Collazo</div>

                                    <svg class="hidden md:block mx-1 h-5 w-5 text-teal-600" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path d="M11 0h3L9 20H6l5-20z" />
                                    </svg>

                                    <div class="text-base font-medium text-teal-500">(347) 879-7225</div>
                                </div>
                            </div>
                        </footer>
                        <footer class="mt-8">
                            <div class="md:flex md:items-center md:justify-center">
                                <div class="md:flex-shrink-0">
                                    <img class="mx-auto h-10 w-10 rounded-full"
                                        src="https://scontent-mia3-2.xx.fbcdn.net/v/t39.30808-6/251732355_1945363692304751_4875223445273569819_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=eDJAo5MAS0YAX8JalHA&_nc_ht=scontent-mia3-2.xx&oh=00_AT8bngNj5_9iRGLjDfDG1Fuq8sr8p3KnUoj7VaOy9xD3vw&oe=628D8590"
                                        alt="Patricia Collazo">
                                </div>
                                <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                    <div class="text-base font-medium text-teal-900">Patricia Collazo</div>

                                    <svg class="hidden md:block mx-1 h-5 w-5 text-teal-600" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path d="M11 0h3L9 20H6l5-20z" />
                                    </svg>

                                    <div class="text-base font-medium text-teal-500">(929) 299-7557</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>

    </section>

</body>

</html>
