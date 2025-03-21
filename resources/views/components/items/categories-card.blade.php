{{-- Details in this div for the category modal script in the categories.blade.php --}}
<div class="relative block cursor-pointer overflow-hidden rounded-lg border border-accent p-4 sm:p-6 lg:p-8 group"
    onclick="showCategoryModal('{{ $category->img[0] ? $category->img[0] : $category->img }}', '{{ __($category->name) }}', '{{ json_encode($category->desc) }}')">
    {{-- Gradient bottom --}}
    <span
        class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-background via-accent to-background dark:from-primary dark:via-accent dark:to-primary">
    </span>

    {{-- Category content --}}
    <div class="mb-5 text-center sm:flex sm:justify-between sm:gap-4 lg:flex-col lg:items-center">
        {{-- Category name --}}
        <div>
            <h3 class="text-primary text-lg font-bold sm:text-xl">
                {{ __($category->name) }}
            </h3>
        </div>

        {{-- Category image --}}
        <div class="flex items-center justify-center sm:shrink-0 group-hover:scale-110 transition-transform">
            <img loading="lazy" alt="{{ __($category->name) }}"
                src="{{ $category->img[0] ? $category->img[0] : $category->img }}"
                class="size-52 rounded-lg object-cover" />
        </div>
    </div>
</div>
