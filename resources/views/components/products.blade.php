<div class="bg-background overflow-hidden py-6" id="our-products">
    @foreach ($products as $product)
        @php
            $currentLocale = App::getLocale();
            $desc = $product->desc[$currentLocale];
            $carouselId = 'carousel-' . $loop->index;
            $prevBtnId = 'prevBtn-' . $loop->index;
            $nextBtnId = 'nextBtn-' . $loop->index;
        @endphp
        @if ($loop->even)
            {{-- About us content Desktop --}}
            <div
                class="slidingDivRight justify-centeropacity-0 mx-auto w-full max-w-[1440px] translate-x-full transform flex-col items-center gap-6 transition duration-1000 md:px-20 lg:flex lg:flex-row">
                <div class="mr-0 w-full items-center justify-center md:my-20 md:ml-0 md:mr-20 md:w-1/2">
                    {{-- About us title --}}
                    <h2 class="text-primary text-2xl font-bold tracking-tight sm:text-4xl md:mb-[25px]">
                        {{ __($product->name) }}
                    </h2>
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-left text-[12px] lg:text-sm">
                        <li class="text-gray-600 text-lg leading-8">
                            @foreach ($desc as $desc)
                                {{ $desc }}.
                            @endforeach
                        </li>
                    </ul>
                </div>
                {{-- About us image --}}
                @includeFirst([
                    'components.products_carousel',
                    'product' => $product,
                    'carouselId' => $carouselId,
                    'prevBtnId' => $prevBtnId,
                    'nextBtnId' => $nextBtnId,
                    'desc' => $desc,
                ])
            </div>
        @else
            {{-- About us content Desktop --}}
            <div
                class="slidingDiv mx-auto w-full max-w-[1440px] -translate-x-full transform flex-col items-center justify-center gap-6 opacity-0 transition duration-1000 md:px-20 lg:flex lg:flex-row">
                {{-- About us image --}}
                @includeFirst([
                    'components.products_carousel',
                    'product' => $product,
                    'carouselId' => $carouselId,
                    'prevBtnId' => $prevBtnId,
                    'nextBtnId' => $nextBtnId,
                    'desc' => $desc,
                ])
                <div class="w-full items-center justify-center md:my-20 md:w-1/2">
                    {{-- About us title --}}
                    <h2 class="text-primary text-2xl font-bold tracking-tight sm:text-4xl md:mb-[25px]">
                        {{ __($product->name) }}
                    </h2>
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-left text-[12px] lg:text-sm">
                        <li class="text-gray-600 text-lg leading-8">
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
                    entry.target.classList.remove('opacity-0', '-translate-x-full');
                    entry.target.classList.add('opacity-100', 'translate-x-0');
                    entry.target.removeAttribute('id');
                }
            });
        });
        const observerRight = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-x-full');
                    entry.target.classList.add('opacity-100', 'translate-x-0');
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
