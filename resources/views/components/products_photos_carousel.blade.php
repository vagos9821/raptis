<div class="bg-background" id="categories">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 flex flex-wrap">
        @foreach ($products as $product)
            @php
                $currentLocale = App::getLocale();
                $desc = $product->desc[$currentLocale];
                $carouselId = 'carousel-' . $loop->index;
                $prevBtnId = 'prevBtn-' . $loop->index;
                $nextBtnId = 'nextBtn-' . $loop->index;
            @endphp
            {{-- About us content --}}
            <div id="categoryModal"
                class="slidingDiv mx-auto flex items-center justify-center gap-8 p-2 transition duration-1000 md:p-0 lg:-translate-x-full lg:transform lg:opacity-0 h-[512px]">
                {{-- About us image --}}
                <div class="w-full">
                    @includeFirst([
                        'components.categories_carousel',
                        'product' => $product,
                        'carouselId' => $carouselId,
                        'prevBtnId' => $prevBtnId,
                        'nextBtnId' => $nextBtnId,
                        'desc' => $desc,
                    ])
                </div>
            </div>
        @endforeach
    </div>
</div>
{{-- Products Scroll Sliding Effect --}}
<script defer type="module" defer>
    function showCategoryModal(img, name, desc) {
        document.getElementById('modalImg').src = img;
        document.getElementById('modalTitle').textContent = name;
        const modalDesc = document.getElementById('modalDescription');
        modalDesc.innerHTML = '';

        const descArray = JSON.parse(desc);
        const lang = '{{ app()->getLocale() }}';
        const items = descArray[lang] || (lang === 'en' ? ['No description available'] : [
            'Δεν υπάρχει διαθέσιμη περιγραφή'
        ]);

        items.forEach(item => {
            const li = document.createElement('li');
            li.className = 'text-primary text-[16px] leading-[1.25]';
            li.textContent = item;
            modalDesc.appendChild(li);
        });

        document.getElementById('categoryModal').classList.remove('hidden');
    }


    function closeModal() {
        document.getElementById('categoryModal').classList.add('hidden');
    }

    document.getElementById('closeModal').addEventListener('click', closeModal);

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });

    document.getElementById('modalOverlay').addEventListener('click', function(event) {
        if (event.target === document.getElementById('modalOverlay')) {
            closeModal();
        }
    });

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
