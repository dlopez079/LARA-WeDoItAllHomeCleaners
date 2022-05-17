<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>We Do All Home Cleaners</title>

    {{-- <!-- Fonts --> --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- <!-- Styles --> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <!-- AlphineJS --> --}}
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
                        <rect x="0" y="0" width="4" height="4" class="text-teal-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect y="72" width="640" height="640" class="text-teal-50" fill="currentColor" />
                <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
            </svg>
        </div>

        {{-- This div sits in front of the aboslute background. --}}
        <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
            <div
                x-data="{ isOpen: false }"
                >
                {{-- Main Navigation Bar. --}}
                <nav 
                class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                    aria-label="Global">
                    <div 
                    
                    class="flex items-center flex-1">

                        {{-- Icon Placeholder --}}
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">We Do All Your Home Cleaning</span>
                                <?xml version="1.0" encoding="UTF-8"?><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 201.82 189.39"
                                    width="60px"
                                    height="60px">
                                    <g id="a">
                                        <g>
                                            <path
                                                d="M201.82,189.39H0V0H201.82V189.39Zm-169.83-8.17h55.93V113.74h25.25v67.59h55.71V86.85h27.8c-2.23-2.6-4.74-4.27-7.05-6.19-11.42-9.53-22.83-19.06-34.09-28.77-1.25-1.07-2.13-3.23-2.18-4.91-.23-7.55-.09-15.11-.11-22.67,0-1.28-.14-2.56-.21-3.77h-23.96v9.06c-9.98-8.18-19.42-15.93-28.86-23.67C67.85,33.01,35.96,59.68,3.22,87.07H31.99v94.15Z"
                                                fill="#fff" />
                                            <path
                                                d="M31.99,181.22V87.07H3.22C35.96,59.68,67.85,33.01,100.23,5.93c9.44,7.74,18.89,15.49,28.86,23.67v-9.06h23.96c.07,1.21,.2,2.49,.21,3.77,.02,7.56-.12,15.12,.11,22.67,.05,1.68,.93,3.84,2.18,4.91,11.26,9.7,22.67,19.24,34.09,28.77,2.3,1.92,4.82,3.59,7.05,6.19h-27.8v94.47h-55.71V113.74h-25.25v67.48H31.99ZM122.88,104v67.49h36.33V76.93h10.67c-7.72-6.5-14.52-12.61-21.76-18.15-3.71-2.84-5.07-5.9-4.77-10.47,.39-6.02,.1-12.09,.1-18.39l-4.6,.23v20.51c-13.25-10.99-25.87-21.45-38.63-32.04-23.19,19.49-45.98,38.66-68.77,57.82l.24,.84h10.26v94.25h36.11V104h44.82Z"
                                                fill="rgba(0,104,55,.96)" />
                                            <path
                                                d="M122.88,104h-44.82v67.53H41.95V77.29h-10.26l-.24-.84c22.79-19.16,45.59-38.33,68.77-57.82,12.76,10.58,25.38,21.05,38.63,32.04V30.15l4.6-.23c0,6.3,.29,12.36-.1,18.39-.3,4.57,1.06,7.63,4.77,10.47,7.24,5.54,14.04,11.66,21.76,18.15h-10.67v94.56h-36.33V104Z"
                                                fill="#fff" />
                                        </g>
                                    </g>
                                    <g id="b">
                                        <g>
                                            <path
                                                d="M127,171.49H62.22c0-39.93,0-79.86,0-119.81H127v119.81Zm-17.72-82.04c1.09-.43,1.58,0,1.82,1,.24,1.01,.58,1.99,.89,2.98,1.21,3.82,2.45,7.64,3.63,11.47,1.14,3.7,2.16,7.43,3.37,11.11,.49,1.51,1.55,2.38,3,2.49,2.43,.18,4.18-2.48,3.51-4.86-1.07-3.79-2.3-7.53-3.47-11.3-1.19-3.83-2.32-7.68-3.59-11.48-1.02-3.07-1.49-6.34-3.34-9.11-1.97-2.95-4.58-4.85-8.26-4.88-3.75-.03-7.5,0-11.25,0-1.94,0-3.69,.43-5.38,1.51-2.64,1.69-4.11,4.11-5.03,6.97-.76,2.38-1.48,4.78-2.25,7.28-1.02-1.12-1.95-2.09-2.83-3.1-1.27-1.44-2.48-2.95-3.78-4.36-.9-.98-1.84-1.96-2.93-2.72-.57-.39-.79-.68-.78-1.33,.03-2.5,0-4.99,.02-7.49,0-.94-.21-1.92,.74-2.63,.27-.2,.5-.68,.46-1.01-.12-1.2,.51-2,1.24-2.79,.23-.25,.47-.51,.7-.76,.69-.77,1.41-1.51,2.08-2.3,.47-.56,.77-1.25,.13-1.85-.62-.59-1.22-.24-1.71,.29-.49,.51-.96,1.04-1.52,1.64,0-.33-.04-.54,0-.73,.19-.7,.55-1.4,.56-2.09,0-.51-.34-1.24-.76-1.47-.64-.36-.94,.36-1.15,.86-.24,.59-.4,1.21-.6,1.82-.19-.67-.17-1.31-.2-1.96-.04-.66-.32-1.15-1.07-1.13-.71,.02-.95,.5-.97,1.12-.02,.65,0,1.29,0,1.94-.44-.69-.67-1.43-1-2.13-.12-.26-.51-.58-.74-.56-.3,.03-.78,.34-.82,.59-.1,.61-.04,1.26,.05,1.88,.09,.6,.32,1.19,.48,1.78-.67-.48-1.15-1-1.63-1.53-.49-.54-1.08-.89-1.71-.35-.66,.57-.41,1.29,.07,1.85,1.09,1.28,2.4,2.42,3.31,3.81,.86,1.33,1.74,2.88,1.88,4.41,.29,3.13,.1,6.3,.07,9.46,0,.28-.19,.66-.41,.83-1.86,1.47-2.3,3.96-.95,5.91,.73,1.06,1.74,1.95,1.4,3.47-.14,.63-.14,1.48,.69,1.62,.48,.09,1.05-.31,1.77-.56,.72,.78,1.63,1.77,2.53,2.76,2.11,2.36,4.25,4.69,6.31,7.1,1.63,1.9,4.83,1.07,5.62-1.54,1.11-3.67,2.29-7.33,3.39-11.01,.29-.98,.79-1.29,1.79-.91-1.32,4.5-2.63,9.01-3.97,13.61h24.56l-3.97-13.6Zm-17.24,38.57c0,.6,0,1.04,0,1.49,0,11.54,0,23.08,0,34.63,0,1.39,.3,2.62,1.19,3.76,1.27,1.63,4.45,1.8,5.71,.19,.83-1.07,1.27-2.25,1.26-3.64-.03-4.78-.01-9.56-.01-14.34,0-6.97,0-13.94,0-20.9,0-.37,0-.73,0-1.1h1.5c.02,.24,.06,.41,.06,.57,0,10.46,0,20.92,.01,31.39,0,1.97-.09,3.97,.2,5.9,.39,2.58,3.01,3.96,5.36,2.96,1.94-.82,2.56-2.52,2.57-4.47,.03-5.19,0-10.38,.01-15.57,0-6.55,0-13.1,0-19.66,0-.37,.03-.74,.06-1.23h10.62c-2.29-7.8-4.54-15.44-6.78-23.06h-3.91c.12,1.06,.25,2.05,.35,3.04,.26,2.6,.94,5.19,.19,7.83-.99,3.5-3.05,6.13-6.44,7.44-2.31,.9-4.68,.75-7.01-.47-3.09-1.63-4.74-4.2-5.57-7.45-.64-2.51,.07-4.96,.3-7.43,.09-.98,.22-1.95,.34-2.98h-3.92l-6.77,23.1h10.68Zm9.1-66.54h0c-2.12,0-4.24,0-6.36-.02-.58,0-.85,.16-1,.75-.77,3.14-.34,5.96,1.68,8.6,2.31,3.02,6.76,3.41,9.41,1.6,3.47-2.37,4.41-7.12,3.46-10.12-.22-.7-.53-.83-1.16-.83-2.01,.02-4.03,0-6.04,0Zm7.91-8.36h-16c.35,2.07,.65,4.05,1.04,6.01,.06,.3,.47,.75,.73,.76,4.33,.05,8.65,.03,13.02,.03l1.22-6.8Z"
                                                fill="#fff" />
                                            <path
                                                d="M109.28,89.45l3.97,13.6h-24.56c1.34-4.6,2.66-9.1,3.97-13.61-1.01-.38-1.5-.07-1.79,.91-1.1,3.68-2.28,7.33-3.39,11.01-.79,2.61-3.99,3.43-5.62,1.54-2.06-2.4-4.2-4.74-6.31-7.1-.9-1-1.81-1.98-2.53-2.76-.72,.25-1.29,.65-1.77,.56-.82-.15-.83-1-.69-1.62,.33-1.52-.67-2.41-1.4-3.47-1.35-1.95-.91-4.44,.95-5.91,.22-.18,.41-.55,.41-.83,.03-3.16,.22-6.33-.07-9.46-.14-1.52-1.02-3.08-1.88-4.41-.91-1.4-2.22-2.53-3.31-3.81-.48-.56-.73-1.27-.07-1.85,.63-.55,1.22-.2,1.71,.35,.48,.53,.97,1.05,1.63,1.53-.17-.59-.39-1.18-.48-1.78-.1-.62-.15-1.27-.05-1.88,.04-.25,.52-.56,.82-.59,.24-.02,.62,.3,.74,.56,.33,.69,.56,1.44,1,2.13,0-.65-.02-1.3,0-1.94,.02-.62,.26-1.1,.97-1.12,.76-.02,1.04,.48,1.07,1.13,.04,.64,0,1.29,.2,1.96,.2-.61,.36-1.23,.6-1.82,.21-.5,.51-1.21,1.15-.86,.41,.23,.76,.96,.76,1.47,0,.7-.37,1.39-.56,2.09-.05,.19,0,.4,0,.73,.56-.6,1.03-1.13,1.52-1.64,.5-.52,1.09-.88,1.71-.29,.63,.6,.34,1.29-.13,1.85-.66,.79-1.38,1.54-2.08,2.3-.23,.26-.46,.51-.7,.76-.73,.79-1.36,1.59-1.24,2.79,.03,.33-.2,.81-.46,1.01-.95,.71-.74,1.69-.74,2.63,0,2.5,.02,4.99-.02,7.49,0,.66,.21,.94,.78,1.33,1.08,.75,2.02,1.74,2.93,2.72,1.3,1.41,2.51,2.91,3.78,4.36,.89,1.01,1.81,1.98,2.83,3.1,.77-2.5,1.48-4.89,2.25-7.28,.92-2.86,2.39-5.28,5.03-6.97,1.69-1.08,3.44-1.52,5.38-1.51,3.75,0,7.5-.02,11.25,0,3.68,.03,6.29,1.93,8.26,4.88,1.85,2.77,2.32,6.05,3.34,9.11,1.27,3.8,2.4,7.65,3.59,11.48,1.17,3.76,2.4,7.51,3.47,11.3,.67,2.38-1.08,5.04-3.51,4.86-1.44-.11-2.5-.98-3-2.49-1.2-3.68-2.23-7.41-3.37-11.11-1.18-3.83-2.42-7.65-3.63-11.47-.31-.99-.65-1.97-.89-2.98-.24-1-.72-1.43-1.82-1Z"
                                                fill="#006837" />
                                            <path
                                                d="M92.04,128.03h-10.68l6.77-23.1h3.92c-.12,1.03-.26,2-.34,2.98-.22,2.47-.94,4.92-.3,7.43,.83,3.25,2.48,5.82,5.57,7.45,2.33,1.22,4.7,1.37,7.01,.47,3.39-1.31,5.44-3.94,6.44-7.44,.75-2.65,.07-5.23-.19-7.83-.1-.99-.23-1.97-.35-3.04h3.91c2.24,7.62,4.49,15.26,6.78,23.06h-10.62c-.02,.5-.06,.87-.06,1.23,0,6.55,0,13.1,0,19.66,0,5.19,.02,10.38-.01,15.57,0,1.95-.64,3.65-2.57,4.47-2.35,.99-4.98-.39-5.36-2.96-.29-1.93-.2-3.93-.2-5.9-.02-10.46,0-20.92-.01-31.39,0-.17-.03-.34-.06-.57h-1.5c0,.37,0,.73,0,1.1,0,6.97,0,13.94,0,20.9,0,4.78-.02,9.56,.01,14.34,.01,1.39-.43,2.57-1.26,3.64-1.26,1.61-4.44,1.44-5.71-.19-.89-1.14-1.19-2.37-1.19-3.76,0-11.54,0-23.08,0-34.63,0-.44,0-.89,0-1.49Z"
                                                fill="#006837" />
                                            <path
                                                d="M101.14,61.49c2.01,0,4.03,.02,6.04,0,.63,0,.94,.12,1.16,.83,.94,3,0,7.75-3.46,10.12-2.65,1.81-7.1,1.42-9.41-1.6-2.02-2.64-2.45-5.47-1.68-8.6,.15-.59,.42-.76,1-.75,2.12,.03,4.24,.01,6.36,.01h0Z"
                                                fill="#006837" />
                                            <path
                                                d="M109.05,53.13l-1.22,6.8c-4.37,0-8.7,.01-13.02-.03-.25,0-.67-.46-.73-.76-.38-1.96-.69-3.94-1.04-6.01h16Z"
                                                fill="#006837" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">

                                {{-- Open Main Menu Button --}}
                                <button 
                                @click="isOpen = !isOpen"
                                type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-teal-400 hover:text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-teal-500"
                                    aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    {{-- <!-- Heroicon name: outline/menu --> --}}
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
                            <a href="#" class="font-medium text-teal-500 hover:text-teal-900">Gallery</a>

                            <a href="#" class="font-medium text-teal-500 hover:text-teal-900">Testimonial</a>

                            <a href="#" class="font-medium text-teal-500 hover:text-teal-900">About</a>

                            <a href="#" class="font-medium text-teal-500 hover:text-teal-900">Contact</a>
                        </div>
                    </div>

                </nav>

                {{-- <!--
                            Mobile menu, show/hide based on menu open state.
                    
                            Entering: "duration-150 ease-out"
                            From: "opacity-0 scale-95"
                            To: "opacity-100 scale-100"
                            Leaving: "duration-100 ease-in"
                            From: "opacity-100 scale-100"
                            To: "opacity-0 scale-95"
                        --> --}}
                <div 
                    x-show="isOpen"
                    x-transition:enter="transition ease-out duration-150 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacityu-100 scale-100"
                    x-transition:leave="transition ease-in duration-100 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div 
                        
                        class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">

                        {{-- X Svg with Logo which is currently hidden --}}
                        <div class="px-5 pt-4 flex items-center justify-between">

                            {{-- Image Div --}}
                            <div>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/workflow-mark-teal-600.svg" alt="">
                            </div>

                            {{-- Close Div --}}
                            <div class="-mr-2">

                                {{-- Close Button --}}
                                <button 
                                    @click="isOpen = !isOpen"
                                    type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-teal-400 hover:text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-teal-500">
                                    <span class="sr-only">Close main menu</span>
                                    {{-- Heroicon name: outline/x --}}
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        {{-- Navigation Mobile Buttons Lists --}}
                        <div class="px-2 pt-2 pb-3 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-teal-700 hover:text-teal-900 hover:bg-teal-50">Product</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-teal-700 hover:text-teal-900 hover:bg-teal-50">Features</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-teal-700 hover:text-teal-900 hover:bg-teal-50">Marketplace</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-teal-700 hover:text-teal-900 hover:bg-teal-50">Company</a>
                        </div>

                        {{-- Log on button which is hidden because we are not using a back end. --}}
                        <a href="#"
                            class="block w-full px-5 py-3 text-center font-medium text-teal-600 bg-teal-50 hover:bg-teal-100 hidden">
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
                                class="block text-sm font-semibold uppercase tracking-wide text-teal-500 sm:text-base lg:text-sm xl:text-base">Coming
                                soon</span>
                            <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                                <span class="block text-teal-900">We Do All Your</span>
                                <span class="block text-teal-600">Home Cleaning</span>
                            </span>
                        </h1>
                        <p class="mt-3 text-base text-teal-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Anim aute id
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
                                    <rect x="0" y="0" width="4" height="4" class="text-teal-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect y="72" width="640" height="640" class="text-teal-50" fill="currentColor" />
                            <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                        </svg>
                        <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                            <button type="button"
                                class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                <span class="sr-only">Watch our video to learn more</span>
                                <img class="w-full"
                                    src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                    alt="">
                                <div class="absolute inset-0 w-full h-full flex items-center justify-center"
                                    aria-hidden="true">
                                    <svg class="h-20 w-20 text-teal-500" fill="currentColor" viewBox="0 0 84 84">
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
                <p class="mt-6 text-xl text-teal-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra.
                    Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit
                    justo viverra non adipisicing elit distinctio. Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Dolorum, unde ut quasi accusamus culpa facilis, vero similique, perferendis blanditiis sed
                    excepturi maiores obcaecati commodi explicabo! Deserunt eveniet velit ex totam!</p>
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
                    aria-labelledby="svg-workcation">
                    <title id="svg-workcation">Workcation</title>
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
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl text-center">
                            <span class="block text-teal-600">Testimonials</span>
                        </span>
                    </h1>
                    
                    <blockquote class="mt-10">
                        <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-teal-900">
                            <p>&ldquo;Highly recommend We Do It All Home Cleaning. Milca is wonderful! She’s thorough, efficient and flexible..&rdquo;</p>
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

    {{-- Contact --}}
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
                    <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">We’re here to clean
                    </p>
                    <p class="mt-3 text-lg text-teal-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et,
                        egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum,
                        augue. Aliquet amet volutpat quisque ut interdum tincidunt duis.</p>
                    <div class="mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <a href="#"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-teal-900 bg-white hover:bg-teal-50">
                                Contact Us
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


</body>

</html>
