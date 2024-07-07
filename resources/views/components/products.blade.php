<div class="overflow-hidden py-6" id="our-products">
    @foreach ($products as $product)
        @php
            $currentLocale = App::getLocale();
            $desc = $product->desc[$currentLocale];
            $carouselId = 'carousel-' . $loop->index;
            $prevBtnId = 'prevBtn-' . $loop->index;
            $nextBtnId = 'nextBtn-' . $loop->index;
        @endphp
        @if ($loop->even)
            {{-- About us content --}}
            <div
                class="slidingDivRight lg:justify-centerlg:opacity-0 mx-auto flex w-full max-w-[90vw] flex-col items-center gap-6 p-2 transition duration-1000 md:p-0 md:pl-[10vw] lg:flex lg:max-h-[400px] lg:min-h-[400px] lg:translate-x-full lg:transform lg:flex-row">
                {{-- About us image --}}
                <div class="w-full items-center justify-center md:w-1/2 lg:order-2">
                    @includeFirst([
                        'components.products_carousel',
                        'product' => $product,
                        'carouselId' => $carouselId,
                        'prevBtnId' => $prevBtnId,
                        'nextBtnId' => $nextBtnId,
                        'desc' => $desc,
                    ])
                </div>
                <div class="w-full items-center justify-center md:my-20 md:w-1/2 lg:order-1">
                    {{-- About us title --}}
                    <h2 class="text-primary text-2xl font-bold tracking-normal md:mb-[25px] md:text-3xl">
                        {{ __($product->name) }}
                    </h2>
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-left">
                        <li class="text-gray-600 text-base leading-8 md:text-lg lg:text-xl lg:leading-10">
                            @foreach ($desc as $desc)
                                {{ $desc }}.
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        @else
            {{-- About us content --}}
            <div
                class="slidingDiv mx-auto flex w-full max-w-[90vw] flex-col items-center justify-center gap-6 p-2 transition duration-1000 md:p-0 md:pr-[10vw] lg:flex lg:max-h-[400px] lg:min-h-[400px] lg:-translate-x-full lg:transform lg:flex-row lg:opacity-0">
                {{-- About us image --}}
                <div class="w-full items-center justify-center md:my-20 md:w-1/2">
                    @includeFirst([
                        'components.products_carousel',
                        'product' => $product,
                        'carouselId' => $carouselId,
                        'prevBtnId' => $prevBtnId,
                        'nextBtnId' => $nextBtnId,
                        'desc' => $desc,
                    ])
                </div>
                <div class="w-full items-center justify-center md:my-20 md:w-1/2">
                    {{-- About us title --}}
                    <h2 class="text-primary text-2xl font-bold tracking-normal md:mb-[25px] md:text-3xl">
                        {{ __($product->name) }}
                    </h2>
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-left">
                        <li class="text-gray-600 text-base leading-8 md:text-lg lg:text-xl lg:leading-10">
                            @foreach ($desc as $desc)
                                {{ $desc }}.
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        @endif
        @if (!$loop->last)
            @include('components.divider')
        @endif
    @endforeach
</div>
{{-- Products Scroll Sliding Effect --}}
<script defer type="module">
    document.addEventListener('DOMContentLoaded', function() {
        const slidingDivs = document.querySelectorAll('.slidingDiv');
        const slidingDivsRight = document.querySelectorAll('.slidingDivRight');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('lg:opacity-0', 'lg:-translate-x-full');
                    entry.target.classList.add('lg:opacity-100', 'lg:translate-x-0');
                    entry.target.removeAttribute('id');
                }
            });
        });
        const observerRight = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('lg:opacity-0', 'lg:translate-x-full');
                    entry.target.classList.add('lg:opacity-100', 'lg:translate-x-0');
                    entry.target.removeAttribute('id');
                }
            });
        });

        slidingDivs.forEach(div => {
            observer.observe(div);
        });

        slidingDivsRight.forEach(div => {
            observerRight.observe(div);
        });
    });
</script>
