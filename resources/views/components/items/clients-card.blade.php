<a href="#clients" class="text-primary block">
    {{-- Client image --}}
    <img alt="" src="{{ $clients->img }}"
        class="h-56 w-full rounded-bl-3xl rounded-tr-3xl object-cover shadow-md sm:h-64 lg:h-72" />

    {{-- Client details --}}
    <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
        {{-- Client name --}}
        <strong class="font-medium">{{ $clients->name }}</strong>

        {{-- Separator --}}
        <span class="hidden sm:bg-accent sm:block sm:h-px sm:w-8"></span>

        {{-- Client year --}}
        <p class="mt-0.5 opacity-50 sm:mt-0">{{ $clients->created_at->year }}</p>
    </div>
</a>
