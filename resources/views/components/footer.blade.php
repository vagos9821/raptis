{{-- End of body --}}
</body>

{{-- Footer --}}
<div class="bg-primary flex h-[200px] w-full flex-col items-end justify-end">
    <div class="bg-primary flex h-[180px] w-full columns-3 grid-cols-3 items-center justify-center">
        {{-- Left side --}}
        <div class="col-span-1 flex w-full items-center justify-center">
            <p class="text-background w-fit text-sm lg:text-lg">All rights reserved.</p>
        </div>
        {{-- Center, Logo --}}
        <div class="col-span-1 flex w-full justify-center dark:hidden">
            @svg('logo-light', 'size-24 fill-background')
        </div>
        <div class="col-span-1 hidden w-full justify-center dark:flex">
            @svg('logo-dark', 'size-24 fill-background')
        </div>
        {{-- Right side, Contact info --}}
        <div class="text-l text-background col-span-1 w-full fill-accent pt-5 md:flex">
            <ul class="space-x-6 md:flex">
                <li class="flex items-center justify-center text-sm lg:text-lg">
                    @svg('map', 'size-8') ΑΕυφράτου 8 Βύρωνας 16232
                </li>
                <li class="flex items-center justify-center text-sm lg:text-lg">
                    @svg('phone', 'size-8') +30 210 76 23 600
                </li>
                <li class="flex items-center justify-center text-sm lg:text-lg">
                    @svg('mail', 'size-8') ebags@otenet.gr
                </li>
            </ul>
        </div>
    </div>
    {{-- Designed by --}}
    <p class="bg-primary mb-1 mr-10 h-[20px] text-sm opacity-50">Created and Designed by: Evangelos Sigalas</p>
</div>
{{-- End of Html --}}

</html>
