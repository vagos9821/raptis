<!-- End of body -->
</body>

<!-- Footer -->
<footer class="bg-primary flex h-fit w-full flex-col items-end justify-end">

    <!-- Footer main content -->
    <div
        class="bg-primary flex h-auto w-full flex-col items-center justify-center py-5 md:h-[180px] md:flex-row md:py-0">

        <!-- Left side: Rights reserved -->
        <div class="mb-5 flex w-full items-center justify-center md:mb-0 md:w-1/3">
            <p class="text-background text-sm xl:text-base">
                {{ __('All rights reserved.') }}
            </p>
        </div>

        <!-- Center: Logo -->
        <div class="mb-5 flex w-full justify-center md:mb-0 md:w-1/3">
            <div class="dark:hidden">
                @svg('logo-light', 'size-24 fill-background')
            </div>
            <div class="hidden dark:flex">
                @svg('logo-dark', 'size-24 fill-background')
            </div>
        </div>

        <!-- Right side: Contact info -->
        <div class="text-background flex w-full items-center justify-center text-base md:w-1/3 md:text-lg lg:text-xl">
            <ul class="flex flex-col flex-wrap space-x-6 md:flex-row md:items-center md:justify-center">
                <li class="mb-2 flex items-center justify-start md:mb-0">
                    @svg('map', 'size-8 fill-accent') {{ __('Ευφράτου 8 Βύρωνας 16232') }}
                </li>
                <li class="mb-2 flex items-center justify-start md:mb-0">
                    @svg('phone', 'size-8 fill-accent') +30 210 76 23 600
                </li>
                <li class="flex items-center justify-start">
                    @svg('mail', 'size-8 fill-accent') ebags@otenet.gr
                </li>
            </ul>
        </div>
    </div>

    <!-- Designed by -->
    <div class="bg-primary flex w-full justify-center py-1">
        <p class="text-background text-sm xl:text-base">
            {{ __('Created and Designed by: Vangelis Sigalas') }}
        </p>
    </div>
</footer>

<!-- End of Html -->

</html>
