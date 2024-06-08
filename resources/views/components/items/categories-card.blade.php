<div
    class="relative block overflow-hidden rounded-lg border border-accent p-4 transition-transform hover:scale-110 sm:p-6 lg:p-8">
    <span
        class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-background via-accent to-background dark:from-primary dark:via-accent dark:to-primary"></span>

    <div class="mb-5 sm:flex sm:justify-between sm:gap-4">
        <div>
            <h3 class="text-gray-900 text-lg font-bold sm:text-xl">
                {{ $category->name }}
            </h3>
        </div>

        <div class="hidden sm:block sm:shrink-0">
            <img alt="{{ $category->name }}" src="{{ $category->img }}"
                class="size-16 rounded-lg object-cover shadow-sm" />
        </div>
    </div>
    @include('components.divider')
    <div class="mt-4">
        @if ($category->desc)
            @foreach ($category->desc as $property)
                <li class="text-pretty text-gray-600 text-sm">
                    {{ $property ?? null }}
                </li>
            @endforeach
        @endif

    </div>

    {{-- <dl class="mt-6 flex gap-4 sm:gap-6">
        <div class="flex flex-col-reverse">
            <dd class="text-xs text-gray-500">{{ $category->created_at }}</dd>
        </div>
    </dl> --}}
</div>
