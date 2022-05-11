<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>We Do All Home Cleaners</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- AlphineJS -->
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>

    </head>

    <body class="antialiased">

        {{-- Hero SEction --}}
        <section class="relative bg-white overflow-hidden">

            {{-- Absolute Background --}}
            <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
                <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784"
                    fill="none" viewBox="0 0 640 784">
                    <defs>
                        <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                    <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
                </svg>
            </div>

            {{-- This div sits in front of the aboslute background. --}}
            <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
                <div>
                    {{-- Main Navigation Bar. --}}
                    <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                        aria-label="Global">
                        <div class="flex items-center flex-1">

                            {{-- Icon Placeholder --}}
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="#">
                                    <span class="sr-only">Workflow</span>
                                    <img class="h-8 w-auto sm:h-10"
                                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">

                                    {{-- Open Main Menu Button --}}
                                    <button type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                        aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
                                        <!-- Heroicon name: outline/menu -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            {{-- This div houses the nav button for main navigation bar --}}
                            <div class="hidden md:block md:ml-10 md:space-x-10">
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Gallery</a>

                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Testimonial</a>

                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">About</a>

                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Contact</a>
                            </div>
                        </div>

                    </nav>

                    <!--
                            Mobile menu, show/hide based on menu open state.
                    
                            Entering: "duration-150 ease-out"
                            From: "opacity-0 scale-95"
                            To: "opacity-100 scale-100"
                            Leaving: "duration-100 ease-in"
                            From: "opacity-100 scale-100"
                            To: "opacity-0 scale-95"
                        -->
                    <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                                </div>
                                <div class="-mr-2">
                                    <button type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close main menu</span>
                                        <!-- Heroicon name: outline/x -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3 space-y-1">
                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <a href="#"
                                class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                                Log in </a>
                        </div>
                    </div>
                </div>

                <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">

                    <div class="lg:grid lg:grid-cols-12 lg:gap-8">

                        {{-- Main Text Section --}}
                        <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                            <h1>
                                <span
                                    class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">Coming
                                    soon</span>
                                <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                                    <span class="block text-gray-900">We Do All Your</span>
                                    <span class="block text-indigo-600">Home Cleaning</span>
                                </span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Anim aute id
                                magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                                fugiat veniam occaecat fugiat aliqua ad ad non deserunt sunt. Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Necessitatibus magni dolor quis aliquam? Soluta, ea sequi,
                                ipsam possimus sunt eligendi natus quis et, quam optio ad minima nemo quibusdam maxime.
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
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                                <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                            </svg>
                            <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                                <button type="button"
                                    class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <span class="sr-only">Watch our video to learn more</span>
                                    <img class="w-full"
                                        src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                        alt="">
                                    <div class="absolute inset-0 w-full h-full flex items-center justify-center"
                                        aria-hidden="true">
                                        <svg class="h-20 w-20 text-indigo-500" fill="currentColor" viewBox="0 0 84 84">
                                            <circle opacity="0.9" cx="42" cy="42" r="42" fill="white" />
                                            <path
                                                d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>

                    </div>

                </main>
            </div>

        </section>

        {{-- Testimonials --}}
        <section>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"
                        width="404" height="404" fill="none" viewBox="0 0 404 404" role="img"
                        aria-labelledby="svg-workcation">
                        <title id="svg-workcation">Workcation</title>
                        <defs>
                            <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
                    </svg>

                    <div class="relative">
                        <img class="mx-auto h-8"
                            src="https://tailwindui.com/img/logos/workcation-logo-indigo-600-mark-gray-800-and-indigo-600-text.svg"
                            alt="Workcation">
                        <blockquote class="mt-10">
                            <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas
                                    culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                                    corporis.&rdquo;</p>
                            </div>
                            <footer class="mt-8">
                                <div class="md:flex md:items-center md:justify-center">
                                    <div class="md:flex-shrink-0">
                                        <img class="mx-auto h-10 w-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </div>
                                    <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                        <div class="text-base font-medium text-gray-900">Judith Black</div>

                                        <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path d="M11 0h3L9 20H6l5-20z" />
                                        </svg>

                                        <div class="text-base font-medium text-gray-500">CEO, Workcation</div>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </section>

        </section>

        {{-- About --}}
        <section>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="relative bg-indigo-800">
                <div class="absolute inset-0">
                    <img class="w-full h-full object-cover"
                        src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100"
                        alt="">
                    <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true"></div>
                </div>
                <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">About Us</h1>
                    <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra.
                        Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit
                        justo viverra non adipisicing elit distinctio. Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Dolorum, unde ut quasi accusamus culpa facilis, vero similique, perferendis blanditiis sed
                        excepturi maiores obcaecati commodi explicabo! Deserunt eveniet velit ex totam!</p>
                </div>
            </div>

        </section>

        {{-- Contact --}}
        <section>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="relative bg-gray-800">
                <div class="h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                    <img class="w-full h-full object-cover"
                        src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&blend=6366F1&sat=-100&blend-mode=multiply"
                        alt="">
                </div>
                <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
                    <div class="md:ml-auto md:w-1/2 md:pl-10">
                        <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">Award winning cleaning
                        </h2>
                        <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">We’re here to clean
                        </p>
                        <p class="mt-3 text-lg text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et,
                            egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum,
                            augue. Aliquet amet volutpat quisque ut interdum tincidunt duis.</p>
                        <div class="mt-8">
                            <div class="inline-flex rounded-md shadow">
                                <a href="#"
                                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                                    Contact Us
                                    <!-- Heroicon name: solid/external-link -->
                                    <svg class="-mr-1 ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
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


    </body>

</html>
