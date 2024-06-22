<nav class="bg-primary fixed left-0 right-0 top-3 z-20 mx-auto w-11/12 max-w-screen-xl rounded-md shadow-lg lg:w-full">
    <div class="flex items-center justify-between px-4 py-3 lg:px-8">
        {{-- Logo --}}
        <a href={{ '/' . app()->getLocale() }}>
            <svg version="1.0" xmlns="/www.w3.org/2000/svg" viewBox="0 0 201.000000 200.000000"
                preserveAspectRatio="xMidYMid meet" width="50px" height="50px">
                <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
                    class="fill-background dark:fill-primary" stroke="none">
                    <path
                        d="M70 995 l0 -945 940 0 940 0 0 169 0 169 -184 376 -185 376 -54 0 -54 0 -181 -370 c-100 -204 -182 -375 -182 -380 0 -6 47 -10 110 -10 l111 0 26 60 26 60 144 0 144 0 25 -55 c16 -37 24 -74 24 -110 l0 -55 -710 0 -710 0 0 715 0 715 710 0 710 0 1 -217 0 -218 114 -225 114 -225 0 558 1 557 -940 0 -940 0 0 -945z m1490 -241 c16 -37 30 -68 30 -70 0 -2 -27 -4 -60 -4 -33 0 -60 3 -60 8 0 10 52 132 56 132 2 0 17 -30 34 -66z">
                    </path>
                </g>
            </svg>
        </a>

        {{-- -- Desktop -- --}}
        <div class="hidden flex-grow justify-center space-x-[100px] text-lg lg:flex">
            {{-- Destinations --}}
            <a href={{ '/' . app()->getLocale() }}
                class="nav-link text-background transition-colors duration-200 ease-in-out hover:text-accent">
                {{ __('Αρχική') }}
            </a>
            <a href={{ '/' . App::getLocale() . '/products' }}
                class="nav-link text-background transition-colors duration-200 ease-in-out hover:text-accent">
                {{ __('Τα προϊόντα μας') }}
            </a>
            <a href={{ '/' . App::getLocale() . '/about-us' }}
                class="nav-link text-background transition-colors duration-200 ease-in-out hover:text-accent">
                {{ __('Για εμάς') }}
            </a>
            {{-- Toggle light and dark mode --}}
            <button id="toggle-light"
                class="text-background absolute right-[100px] top-[20px] hidden w-fit items-center justify-center gap-3 text-xs dark:lg:flex">
                <img src="svg/sun.svg" class="size-8"> Toggle light mode
            </button>
            <button id="toggle-dark"
                class="text-background absolute right-[100px] top-[20px] flex w-fit items-center justify-center gap-3 text-xs lg:dark:hidden">
                <img src="svg/moon.svg" class="size-8"> Toggle dark mode
            </button>
            {{-- Toggle language --}}
            @if (app()->getLocale() == 'en')
                <a href="{{ '/' . 'el' }}"
                    class="size-12 bg-red absolute right-[25px] top-[15px] z-50 block rounded-lg px-4 py-2 text-center text-lg text-accent">
                    {{ __('en') }}
                </a>
            @else
                <a href="{{ '/' . 'en' }}"
                    class="size-12 bg-red absolute right-[25px] top-[15px] z-50 block rounded-lg px-4 py-2 text-center text-lg text-accent">
                    {{ __('el') }}
                </a>
            @endif
        </div>

        {{-- -- Mobile -- --}}
        <div id="menu"
            class="bg-primary absolute right-0 top-[60px] flex hidden w-fit min-w-[200px] flex-col space-y-[20px] rounded-md p-[10px] pt-[30px] shadow-md transition-opacity lg:hidden">
            {{-- Destinations --}}
            <a href={{ '/' . app()->getLocale() }}
                class="nav-link text-background transition-colors duration-200 ease-in-out hover:text-accent">
                {{ __('Αρχική') }}
            </a>
            <a href={{ '/' . App::getLocale() . '/products' }}
                class="nav-link text-background transition-colors duration-200 ease-in-out hover:text-accent">
                {{ __('Τα προϊόντα μας') }}
            </a>
            <a href={{ '/' . App::getLocale() . '/about-us' }}
                class="nav-link text-background transition-colors duration-200 ease-in-out hover:text-accent">
                {{ __('Για εμάς') }}
            </a>
            {{-- Toggle language --}}
            @if (app()->getLocale() == 'en')
                <a href="{{ '/' . 'el' }}"
                    class="size-12 bg-red absolute right-[25px] top-[85px] z-50 block rounded-lg px-4 py-2 text-center text-lg text-accent">
                    {{ __('en') }}
                </a>
            @else
                <a href="{{ '/' . 'en' }}"
                    class="size-12 bg-red absolute right-[25px] top-[85px] z-50 block rounded-lg px-4 py-2 text-center text-lg text-accent">
                    {{ __('el') }}
                </a>
            @endif
        </div>
        {{-- Burger icon --}}
        <div id="burgerIcon" class="lg:hidden">
            <svg class="fill-background transition-all ease-in hover:cursor-pointer hover:fill-accent focus:fill-accent dark:fill-primary"
                width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6Z">
                </path>
                <path
                    d="M2 12.0322C2 11.4799 2.44772 11.0322 3 11.0322H21C21.5523 11.0322 22 11.4799 22 12.0322C22 12.5845 21.5523 13.0322 21 13.0322H3C2.44772 13.0322 2 12.5845 2 12.0322Z">
                </path>
                <path
                    d="M3 17.0645C2.44772 17.0645 2 17.5122 2 18.0645C2 18.6167 2.44772 19.0645 3 19.0645H21C21.5523 19.0645 22 18.6167 22 18.0645C22 17.5122 21.5523 17.0645 21 17.0645H3Z">
                </path>
            </svg>
        </div>
        {{-- Toggle light and dark mode --}}
        <button id="toggle-light-mobile"
            class="text-background absolute right-[100px] top-[20px] flex w-fit items-center justify-center gap-3 text-xs dark:flex lg:hidden dark:lg:hidden">
            <img src="svg/sun.svg" class="size-8">
        </button>
        <button id="toggle-dark-mobile"
            class="text-background absolute right-[100px] top-[20px] flex w-fit items-center justify-center gap-3 text-xs dark:hidden lg:hidden">
            <img src="svg/moon.svg" class="size-8">
        </button>
    </div>
</nav>
{{-- Burger menu script --}}
<script>
    document.getElementById('burgerIcon').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden')
    });

    const html = document.querySelector('html');
</script>
