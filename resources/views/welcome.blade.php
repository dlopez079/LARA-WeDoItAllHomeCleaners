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

    <section>
        <div x-data="{
            skip: 3,
            atBeginning: false,
            atEnd: false,
            next() {
                this.to((current, offset) => current + (offset * this.skip))
            },
            prev() {
                this.to((current, offset) => current - (offset * this.skip))
            },
            to(strategy) {
                let slider = this.$refs.slider
                let current = slider.scrollLeft
                let offset = slider.firstElementChild.getBoundingClientRect().width
                slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
            },
            focusableWhenVisible: {
                'x-intersect:enter'() {
                    this.$el.removeAttribute('tabindex')
                },
                'x-intersect:leave'() {
                    this.$el.setAttribute('tabindex', '-1')
                },
            },
            disableNextAndPreviousButtons: {
                'x-intersect:enter.threshold.05'() {
                    let slideEls = this.$el.parentElement.children
        
                    // If this is the first slide.
                    if (slideEls[0] === this.$el) {
                        this.atBeginning = true
                        // If this is the last slide.
                    } else if (slideEls[slideEls.length - 1] === this.$el) {
                        this.atEnd = true
                    }
                },
                'x-intersect:leave.threshold.05'() {
                    let slideEls = this.$el.parentElement.children
        
                    // If this is the first slide.
                    if (slideEls[0] === this.$el) {
                        this.atBeginning = false
                        // If this is the last slide.
                    } else if (slideEls[slideEls.length - 1] === this.$el) {
                        this.atEnd = false
                    }
                },
            },
        }" class="flex flex-col w-full">
            <div x-on:keydown.right="next" x-on:keydown.left="prev" tabindex="0" role="region"
                aria-labelledby="carousel-label" class="flex space-x-6">
                <h2 id="carousel-label" class="sr-only" hidden>Carousel</h2>

                <!-- Prev Button -->
                <button x-on:click="prev" class="text-6xl" :aria-disabled="atBeginning" :tabindex="atEnd ? -1 : 0"
                    :class="{ 'opacity-50 cursor-not-allowed': atBeginning }">
                    <span aria-hidden="true">❮</span>
                    <span class="sr-only">Skip to previous slide page</span>
                </button>

                <span id="carousel-content-label" class="sr-only" hidden>Carousel</span>

                <ul x-ref="slider" tabindex="0" role="listbox" aria-labelledby="carousel-content-label"
                    class="flex w-full overflow-x-scroll snap-x snap-mandatory">
                    <li x-bind="disableNextAndPreviousButtons"
                        class="snap-start w-1/3 shrink-0 flex flex-col items-center justify-center p-2" role="option">
                        <img class="mt-2 w-full" src="https://picsum.photos/400/200?random=1"
                            alt="placeholder image">

                        <button x-bind="focusableWhenVisible" class="px-4 py-2 text-sm">Do Something</button>
                    </li>

                    <li x-bind="disableNextAndPreviousButtons"
                        class="snap-start w-1/3 shrink-0 flex flex-col items-center justify-center p-2" role="option">
                        <img class="mt-2 w-full" src="https://picsum.photos/400/200?random=2"
                            alt="placeholder image">

                        <button x-bind="focusableWhenVisible" class="px-4 py-2 text-sm">Do Something</button>
                    </li>

                    <li x-bind="disableNextAndPreviousButtons"
                        class="snap-start w-1/3 shrink-0 flex flex-col items-center justify-center p-2" role="option">
                        <img class="mt-2 w-full" src="https://picsum.photos/400/200?random=3"
                            alt="placeholder image">

                        <button x-bind="focusableWhenVisible" class="px-4 py-2 text-sm">Do Something</button>
                    </li>

                    <li x-bind="disableNextAndPreviousButtons"
                        class="snap-start w-1/3 shrink-0 flex flex-col items-center justify-center p-2" role="option">
                        <img class="mt-2 w-full" src="https://picsum.photos/400/200?random=4"
                            alt="placeholder image">

                        <button x-bind="focusableWhenVisible" class="px-4 py-2 text-sm">Do Something</button>
                    </li>

                    <li x-bind="disableNextAndPreviousButtons"
                        class="snap-start w-1/3 shrink-0 flex flex-col items-center justify-center p-2" role="option">
                        <img class="mt-2 w-full" src="https://picsum.photos/400/200?random=5"
                            alt="placeholder image">

                        <button x-bind="focusableWhenVisible" class="px-4 py-2 text-sm">Do Something</button>
                    </li>

                    <li x-bind="disableNextAndPreviousButtons"
                        class="snap-start w-1/3 shrink-0 flex flex-col items-center justify-center p-2" role="option">
                        <img class="mt-2 w-full" src="https://picsum.photos/400/200?random=6"
                            alt="placeholder image">

                        <button x-bind="focusableWhenVisible" class="px-4 py-2 text-sm">Do Something</button>
                    </li>
                </ul>

                <!-- Next Button -->
                <button x-on:click="next" class="text-6xl" :aria-disabled="atEnd" :tabindex="atEnd ? -1 : 0"
                    :class="{ 'opacity-50 cursor-not-allowed': atEnd }">
                    <span aria-hidden="true">❯</span>
                    <span class="sr-only">Skip to next slide page</span>
                </button>
            </div>
        </div>
    </section>
    <section>Testimonial Section</section>
    <section>About / Services</section>
    <section>Contact Us</section>

    
</body>

</html>
