<div class="bg-background overflow-hidden py-6" id="about-us">
    @foreach ($categories as $category)
        @php
            $currentLocale = App::getLocale();
            $desc = $category->desc[$currentLocale];
        @endphp
        @if ($loop->even)
            {{-- About us content Desktop --}}
            <div
                class="slidingDivRight mx-auto hidden w-full max-w-[1440px] translate-x-full transform flex-col items-center justify-center opacity-0 transition duration-1000 lg:flex lg:flex-row">
                <div class="my-20 mr-20 w-1/2">
                    {{-- About us title --}}
                    <h2 class="text-primary mb-[25px] text-4xl font-bold tracking-tight sm:text-4xl">
                        {{ __($category->name) }}
                    </h2>
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-left text-[12px] lg:text-sm">
                        <li class="text-gray-600 text-xl leading-8">
                            @foreach ($desc as $desc)
                                {{ $desc }}.
                            @endforeach
                        </li>
                    </ul>
                </div>
                {{-- About us image --}}
                <img src="{{ $category->img }}" class="max-w-96 h-96 max-h-96 w-96 rounded-xl object-contain md:block">
            </div>
            {{-- About us content Mobile --}}
            <div
                class="slidingDivRight mx-auto flex w-full max-w-[1440px] translate-x-full transform flex-col items-center justify-center opacity-0 transition duration-1000 lg:hidden lg:flex-row">
                <div class="mx-5 flex h-[100vh] w-full flex-col items-center justify-center">
                    {{-- About us title --}}
                    <h2 class="text-primary mx-5 text-center text-3xl font-bold tracking-tight">
                        {{ __($category->name) }}
                    </h2>
                    {{-- About us image --}}
                    <img src="{{ $category->img }}"
                        class="max-w-96 h-96 max-h-96 w-96 rounded-xl object-contain md:block">
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-center text-[12px]">
                        <li class="text-gray-600 mx-5 text-xl leading-8">
                            {{ $desc }}.
                        </li>
                    </ul>
                </div>
            </div>
        @else
            {{-- About us content Desktop --}}
            <div
                class="slidingDiv mx-auto hidden w-full max-w-[1440px] -translate-x-full transform flex-col items-center justify-center opacity-0 transition duration-1000 lg:flex lg:flex-row">
                {{-- About us image --}}
                <img src="{{ $category->img }}" class="max-w-96 h-96 max-h-96 w-96 rounded-xl object-contain md:block">
                <div class="my-20 ml-20 w-1/2">
                    {{-- About us title --}}
                    <h2 class="text-primary mb-[25px] text-4xl font-bold tracking-tight sm:text-4xl">
                        {{ __($category->name) }}
                    </h2>
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-left text-[12px] lg:text-sm">
                        <li class="text-gray-600 text-xl leading-8">
                            @foreach ($desc as $desc)
                                {{ $desc }}.
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
            {{-- About us content Mobile --}}
            <div
                class="slidingDiv mx-auto flex w-full max-w-[1440px] -translate-x-full transform flex-col items-center justify-center opacity-0 transition duration-1000 lg:hidden lg:flex-row">
                <div class="mx-5 flex h-[100vh] w-full flex-col items-center justify-center">
                    {{-- About us title --}}
                    <h2 class="text-primary mx-5 text-center text-3xl font-bold tracking-tight">
                        {{ __($category->name) }}
                    </h2>
                    {{-- About us image --}}
                    <img src="{{ $category->img }}"
                        class="max-w-96 h-96 max-h-96 w-96 rounded-xl object-contain md:block">
                    {{-- About us description --}}
                    <ul class="text-primary flex flex-col gap-3 text-center text-[12px]">
                        <li class="text-gray-600 mx-5 text-xl leading-8">
                            {{ $desc }}.
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

<script>
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
