<div class="p-8 sm:p-16 lg:p-24">
    {{-- Load all the carousel items --}}
    @php
        use App\Models\CarouselItem;
        $carouselItems = CarouselItem::all();

    @endphp
    {{-- Carousel container --}}
    <div class="mx-auto w-full">
        <div
            class="bg-background relative mx-auto block min-h-[19rem] max-w-[1250px] items-center rounded-lg shadow-xl md:flex">
            <div id="carousel-items"
                class="relative flex h-full w-full overflow-hidden rounded-t-lg md:w-2/5 md:rounded-l-lg md:rounded-t-none"
                style="min-height: 19rem;">
                {{-- Bring all the carousel items --}}
                @foreach ($carouselItems as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'opacity-1' : 'opacity-0' }} absolute inset-0"
                        style="transition: opacity .5s ease-in-out;">
                        {{-- Carousel image --}}
                        <div class="bg-accent absolute inset-0 h-full w-full opacity-75"></div>
                        <img loading="lazy" class="absolute inset-0 h-full w-full object-contain object-center"
                            src="{{ asset($item->image) }}" alt="{{ $item->alt_text }}">
                        {{-- Carousel svg --}}
                        <div
                            class="text-background absolute -inset-x-1/3 flex h-full w-full items-end justify-end fill-current">
                            <img loading="lazy" src="/svg/{{ $item->svg_name }}.svg" class="h-24 w-full opacity-50"
                                alt="{{ $item->alt_text }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="bg-background flex h-full w-full items-center rounded-lg md:w-3/5">

                <div class="p-12 md:py-12 md:pl-16 md:pr-24">
                    {{-- Carousel text --}}
                    <p id="text-container" class="text-primary text-base md:text-lg lg:text-xl">
                        {{ $carouselItems->first()->text_content }}
                    </p>
                    <a class="mt-3 flex items-baseline text-accent hover:text-accent focus:text-accent" href="#clients">
                        <span class="text-sm xl:text-base">Learn more about our users</span>
                        <span class="ml-1 text-xs">&#x279c;</span>
                    </a>
                </div>
            </div>
            {{-- Carousel buttons --}}
            <button id="prevBtn" aria-label="Previous item"
                class="focus:shadow-outline text-primary absolute left-0 top-0 -ml-6 mt-32 h-12 w-12 rounded-full bg-accent text-2xl shadow-md hover:text-secondary focus:text-secondary focus:outline-none">
                <span class="block" style="transform: scale(-1);">&#x279c;</span>
            </button>
            <button id="nextBtn" aria-label="Next item"
                class="focus:shadow-outline text-primary absolute right-0 top-0 -mr-6 mt-32 h-12 w-12 rounded-full bg-accent text-2xl shadow-md hover:text-secondary focus:text-secondary focus:outline-none">
                <span class="block" style="transform: scale(1);">&#x279c;</span>
            </button>
        </div>
        {{-- Carousel dot indicators --}}
        <div class="flex items-center justify-center pt-6">
            @foreach ($carouselItems as $index => $item)
                <button aria-label="Slide {{ $index + 1 }}"
                    class="carousel-indicator {{ $index === 0 ? 'opacity-100' : 'opacity-50 hover:opacity-100 focus:opacity-100' }} size-2 bg-primary mx-3 rounded-full hover:bg-accent focus:bg-accent"
                    data-slide-to="{{ $index }}">

                </button>
            @endforeach
        </div>
    </div>

    {{-- Carousel script --}}
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselItems = document.querySelectorAll('.carousel-item');
            const indicators = document.querySelectorAll('.carousel-indicator');
            const textContent = @json($carouselItems->pluck('text_content'));
            let currentIndex = 0;
            const slideInterval = 3000; // 3 seconds
            let autoSlideInterval;
            const textContainer = document.getElementById('text-container');

            function showSlide(index) {
                carouselItems.forEach((item, i) => {
                    item.style.opacity = i === index ? '1' : '0';
                    indicators[i].classList.toggle('opacity-100', i === index);
                    indicators[i].classList.toggle('opacity-50', i !== index);
                });
                textContainer.innerHTML = textContent[index];
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

            document.getElementById('prevBtn').addEventListener('click', function() {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            document.getElementById('nextBtn').addEventListener('click', function() {
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
</div>

</html>
