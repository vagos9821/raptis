<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<div class="bg-background p-8 sm:p-16 lg:p-24">
    @php
        use App\Models\CarouselItem;
        $carouselItems = CarouselItem::all();

    @endphp
    <div class="bg-background mx-auto w-full">
        <div
            class="bg-background relative mx-auto block min-h-[19rem] max-w-[1250px] items-center rounded-lg shadow-xl md:flex">
            <div id="carousel-items"
                class="relative flex h-full w-full overflow-hidden rounded-t-lg md:w-2/5 md:rounded-l-lg md:rounded-t-none"
                style="min-height: 19rem;">
                @foreach ($carouselItems as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'opacity-1' : 'opacity-0' }} absolute inset-0"
                        style="transition: opacity .5s ease-in-out;">
                        <img class="absolute inset-0 h-full w-full object-cover object-center"
                            src="{{ asset($item->image) }}" alt="{{ $item->alt_text }}">
                        <div class="bg-accent absolute inset-0 h-full w-full opacity-75"></div>
                        <div
                            class="text-background absolute inset-0 flex h-full w-full items-center justify-center fill-current">
                            <img src="/svg/{{ $item->svg_name }}.svg" class="h-24 w-full opacity-50">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="bg-background flex h-full w-full items-center rounded-lg md:w-3/5">
                <div class="p-12 md:py-12 md:pl-16 md:pr-24">
                    <p id="text-container" class="text-gray-600">
                        {{ $carouselItems->first()->text_content }}
                    </p>
                    <a class="mt-3 flex items-baseline text-accent hover:text-accent focus:text-accent" href="#">
                        <span>Learn more about our users</span>
                        <span class="ml-1 text-xs">&#x279c;</span>
                    </a>
                </div>
            </div>
            <button id="prevBtn"
                class="focus:shadow-outline text-primary absolute left-0 top-0 -ml-6 mt-32 h-12 w-12 rounded-full bg-secondary text-2xl shadow-md hover:text-accent focus:text-accent focus:outline-none">
                <span class="block" style="transform: scale(-1);">&#x279c;</span>
            </button>
            <button id="nextBtn"
                class="focus:shadow-outline text-primary absolute right-0 top-0 -mr-6 mt-32 h-12 w-12 rounded-full bg-secondary text-2xl shadow-md hover:text-accent focus:text-accent focus:outline-none">
                <span class="block" style="transform: scale(1);">&#x279c;</span>
            </button>
        </div>
        <div class="flex items-center justify-center pt-6">
            @foreach ($carouselItems as $index => $item)
                <button
                    class="carousel-indicator {{ $index === 0 ? 'opacity-100' : 'opacity-50 hover:opacity-100 focus:opacity-100' }} size-5 bg-primary mx-3 rounded-full hover:bg-accent focus:bg-accent"
                    data-slide-to="{{ $index }}">

                </button>
            @endforeach
        </div>
    </div>
    <script>
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
