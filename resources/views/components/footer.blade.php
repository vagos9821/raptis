<!-- End of body -->
</body>

<!-- Footer -->
<footer
    class="mt-auto py-6 h-[92px] sm:h-[64px] bg-white border-t border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-3 items-center justify-between">
        <div class="flex items-center justify-center">
            <a href={{ '/' . app()->getLocale() }} aria-label="Home">
                <svg class="size-10 lg:size-10" version="1.0" xmlns="/www.w3.org/2000/svg"
                    viewBox="0 0 201.000000 200.000000" preserveAspectRatio="xMidYMid meet" width="50px" height="50px">
                    <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
                        class="dark:fill-background fill-primary" stroke="none">
                        <path
                            d="M70 995 l0 -945 940 0 940 0 0 169 0 169 -184 376 -185 376 -54 0 -54 0 -181 -370 c-100 -204 -182 -375 -182 -380 0 -6 47 -10 110 -10 l111 0 26 60 26 60 144 0 144 0 25 -55 c16 -37 24 -74 24 -110 l0 -55 -710 0 -710 0 0 715 0 715 710 0 710 0 1 -217 0 -218 114 -225 114 -225 0 558 1 557 -940 0 -940 0 0 -945z m1490 -241 c16 -37 30 -68 30 -70 0 -2 -27 -4 -60 -4 -33 0 -60 3 -60 8 0 10 52 132 56 132 2 0 17 -30 34 -66z">
                        </path>
                    </g>
                </svg>
            </a>
        </div>
        <!-- List -->
        <ul class="flex flex-wrap justify-center items-center whitespace-nowrap gap-3 text-xs">
            <li class="mb-2 flex items-center justify-start md:mb-0">
                @svg('map', 'size-6 fill-accent') {{ __('Ευφράτου 8 Βύρωνας 16232') }}
            </li>
            <li class="mb-2 flex items-center justify-start md:mb-0">
                @svg('phone', 'size-6 fill-accent') +30 210 76 23 600
            </li>
            <li class="flex items-center justify-start">
                @svg('mail', 'size-6 fill-accent') ebags@otenet.gr
            </li>

        </ul>
        <!-- End List -->
        <div>
            <p class="text-gray-400 text-sm text-right">
                {{ __('Created and Designed by: Vangelis Sigalas') }}
            </p>
        </div>
    </div>
</footer>

<!-- End of Html -->

</html>
