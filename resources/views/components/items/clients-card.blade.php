<a href="#" class="block text-primary">
    <img alt="" src="{{ $clients->img }}"
        class="h-56 w-full rounded-bl-3xl rounded-tr-3xl object-cover shadow-md sm:h-64 lg:h-72" />

    <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
        <strong class="font-medium">{{ $clients->name }}</strong>

        <span class="hidden sm:block sm:h-px sm:w-8 sm:bg-accent"></span>

        <p class="mt-0.5 opacity-50 sm:mt-0">{{ $clients->created_at->year }}</p>
    </div>
</a>
