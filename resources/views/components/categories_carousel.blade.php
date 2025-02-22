{{-- Carousel container --}}
<div id="{{ $carouselId }}" class="mx-auto w-min">
    <div
        class="relative flex flex-col justify-between cursor-pointer overflow-visible rounded-lg border border-accent p-4 sm:p-6 lg:p-8 group h-full min-h-[480px]">
        {{-- Gradient bottom --}}
        <span
            class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-background via-accent to-background dark:from-primary dark:via-accent dark:to-primary">
        </span>
        <div class="relative flex h-fit min-w-[208px] overflow-hidden rounded-t-lg md:rounded-l-lg md:rounded-t-none"
            style="min-height: 19rem;">

            {{-- Bring all the carousel items --}}
            @foreach ($product->img as $index => $item)
                <div class="carousel-item-products {{ $index === 0 ? 'opacity-1' : 'opacity-0' }} absolute inset-0 size-52"
                    onclick="showCategoryModal('{{ $product->img[0] ? $product->img[0] : $product->img }}', '{{ __($product->name) }}', '{{ json_encode($product->desc) }}')"
                    style="transition: opacity .5s ease-in-out;">
                    {{-- Carousel image --}}
                    <img loading="lazy" class="size-52 rounded-lg object-contain" src="{{ asset($item) }}"
                        alt="{{ $product->name }}">
                </div>
            @endforeach
        </div>


        {{-- Carousel dot indicators --}}
        <div class="flex items-center justify-center mb-4">
            @foreach ($product->img as $index => $item)
                <button aria-label="Slide {{ $index + 1 }}"
                    class="carousel-indicator-products {{ $index === 0 ? 'opacity-100' : 'opacity-50 hover:opacity-100 focus:opacity-100' }} size-2 bg-primary mx-3 rounded-full hover:bg-accent focus:bg-accent"
                    data-slide-to="{{ $index }}">
                </button>
            @endforeach
        </div>
        {{-- Category name --}}
        <div class="text-center text-primary text-lg font-bold sm:text-xl">
            {{ __($product->name) }}
        </div>

        {{-- Carousel buttons --}}
        <button id="{{ $prevBtnId }}" aria-label="Previous item"
            class="focus:shadow-outline bg-accent text-primary absolute left-6 top-0  mt-32 h-12 w-12 rounded-full text-2xl shadow-md hover:text-secondary focus:text-secondary focus:outline-none md:left-2">
            <span class="block" style="transform: scale(-1);">&#x279c;</span>
        </button>
        <button id="{{ $nextBtnId }}" aria-label="Next item"
            class="focus:shadow-outline bg-accent text-primary absolute right-8 top-0  mt-32 h-12 w-12 rounded-full text-2xl shadow-md hover:text-secondary focus:text-secondary focus:outline-none md:right-2">
            <span class="block" style="transform: scale(1);">&#x279c;</span>
        </button>
    </div>

</div>

{{-- Products Carousel script --}}
<script defer type="module">
    document.addEventListener('DOMContentLoaded', function() {
        const carouselItems = document.querySelectorAll('#{{ $carouselId }} .carousel-item-products');
        const indicators = document.querySelectorAll('#{{ $carouselId }} .carousel-indicator-products');
        const prevBtn = document.querySelector('#{{ $prevBtnId }}');
        const nextBtn = document.querySelector('#{{ $nextBtnId }}');
        let currentIndex = 0;
        const slideInterval = 3000; // 3 seconds
        let autoSlideInterval;

        function showSlide(index) {
            carouselItems.forEach((item, i) => {
                item.style.opacity = i === index ? '1' : '0';
                indicators[i].classList.toggle('opacity-100', i === index);
                indicators[i].classList.toggle('opacity-50', i !== index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex < carouselItems.length - 1) ? currentIndex + 1 : 0;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : carouselItems.length - 1;
            showSlide(currentIndex);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, slideInterval);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        prevBtn.addEventListener('click', function() {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        nextBtn.addEventListener('click', function() {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function() {
                currentIndex = index;
                showSlide(currentIndex);
                stopAutoSlide();
                startAutoSlide();
            });
        });

        // Automatically show the first slide
        showSlide(currentIndex);

        // Set interval for auto-sliding
        startAutoSlide();
    });
</script>
