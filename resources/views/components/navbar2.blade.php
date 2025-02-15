@php
    $currentLocale = app()->getLocale();
    $newLocale = $currentLocale === 'en' ? 'el' : 'en';
    $currentRoute = request()->path(); // Get the current route
    $newRoute = str_replace($currentLocale, $newLocale, $currentRoute);
@endphp

<nav class="bg-background fixed z-20 w-[90vw] mx-10 rounded-xl mt-2 shadow-lg">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" id='burgerIcon'
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <a href={{ '/' . app()->getLocale() }} aria-label="Home">
                        <svg class="size-10 lg:size-10" version="1.0" xmlns="/www.w3.org/2000/svg"
                            viewBox="0 0 201.000000 200.000000" preserveAspectRatio="xMidYMid meet" width="50px"
                            height="50px">
                            <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
                                class="dark:fill-background fill-primary" stroke="none">
                                <path
                                    d="M70 995 l0 -945 940 0 940 0 0 169 0 169 -184 376 -185 376 -54 0 -54 0 -181 -370 c-100 -204 -182 -375 -182 -380 0 -6 47 -10 110 -10 l111 0 26 60 26 60 144 0 144 0 25 -55 c16 -37 24 -74 24 -110 l0 -55 -710 0 -710 0 0 715 0 715 710 0 710 0 1 -217 0 -218 114 -225 114 -225 0 558 1 557 -940 0 -940 0 0 -945z m1490 -241 c16 -37 30 -68 30 -70 0 -2 -27 -4 -60 -4 -33 0 -60 3 -60 8 0 10 52 132 56 132 2 0 17 -30 34 -66z">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="{{ url(app()->getLocale()) }}"
                            class="rounded-md px-3 py-2 text-base font-medium transition-colors duration-200  {{ request()->is(app()->getLocale()) ? 'bg-accent text-background' : 'text-primary hover:bg-accent/70 hover:text-white' }}">
                            {{ __('Αρχική') }}
                        </a>

                        <a href="{{ url(app()->getLocale() . '/products') }}"
                            class="rounded-md px-3 py-2 text-base font-medium transition-colors duration-200  {{ request()->is(app()->getLocale() . '/products*') ? 'bg-accent text-background' : 'text-primary hover:bg-accent/70 hover:text-white' }}">
                            {{ __('Τα προϊόντα μας') }}
                        </a>

                        <a href="{{ url(app()->getLocale() . '/about-us') }}"
                            class="rounded-md px-3 py-2 text-base font-medium transition-colors duration-200  {{ request()->is(app()->getLocale() . '/about-us*') ? 'bg-accent text-background' : 'text-primary hover:bg-accent/70 hover:text-white' }}">
                            {{ __('Για εμάς') }}
                        </a>
                    </div>
                </div>

                <div class="absolute sm:flex items-center justify-center right-7 hidden">
                    <div class="flex items-center justify-center gap-2">
                        <a href="{{ url($newRoute) }}"
                            class="p-2 rounded-lg bg-background hover:bg-accent/70  dark:hover:bg-accent/70  transition-colors duration-200 text-center text-primary">
                            {{ strtoupper($newLocale) }}
                        </a>

                        <button id="darkModeToggle" type="button"
                            class="p-2 rounded-lg bg-background hover:bg-accent/70  dark:hover:bg-accent/70  transition-colors duration-200"
                            aria-label="Toggle dark mode">
                            <span id="darkIcon" class="hidden">
                                <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </span>
                            <span id="lightIcon">
                                <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="{{ url(app()->getLocale()) }}"
                class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is(app()->getLocale()) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-accent/70  hover:text-white' }}">
                {{ __('Αρχική') }}
            </a>

            <a href="{{ url(app()->getLocale() . '/products') }}"
                class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is(app()->getLocale() . '/products*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-accent/70  hover:text-white' }}">
                {{ __('Τα προϊόντα μας') }}
            </a>

            <a href="{{ url(app()->getLocale() . '/about-us') }}"
                class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is(app()->getLocale() . '/about-us*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-accent/70  hover:text-white' }}">
                {{ __('Για εμάς') }}
            </a>
        </div>

        <div class="flex items-center justify-center right-7 sm:hidden p-10">
            <div class="flex items-center justify-center gap-2">
                <a href="{{ url($newRoute) }}"
                    class="p-2 rounded-lg bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-200 text-center text-accent">
                    {{ strtoupper($newLocale) }}
                </a>

                <button id="darkModeToggle" type="button"
                    class="p-2 rounded-lg bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-200"
                    aria-label="Toggle dark mode">
                    <span id="darkIcon" class="hidden">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </span>
                    <span id="lightIcon">
                        <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</nav>
<script type="module">
    document.getElementById('burgerIcon').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden')
    });

    const html = document.querySelector('html');
</script>
