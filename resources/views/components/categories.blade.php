@include('components.products_photos_carousel')
<!-- Product Detail Modal -->
<div id="categoryModal" class="hidden fixed inset-0 z-[80] overflow-y-auto bg-black bg-opacity-50" role="dialog"
    tabindex="-1">
    <div id='modalOverlay' class="bg-accent absolute inset-0 opacity-50"></div>
    <div class="min-h-screen px-4 flex items-center justify-center">
        <div class="relative w-full max-w-4xl mx-auto bg-white rounded-xl shadow-lg dark:bg-neutral-800">

            <button type="button" id="closeModal"
                class="absolute -top-2.5 -right-2.5 z-10 flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400">
                <span class="sr-only">Close</span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>

            <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[500px]">
                <div class="hidden lg:block relative h-full bg-accent">
                    <img class="absolute inset-0 w-full h-full object-cover object-center rounded-t-xl lg:rounded-tr-none lg:rounded-l-xl"
                        id="modalImg" src="" alt="Product Image">
                </div>

                <div class="p-6 md:p-8">
                    <h3 id="modalTitle" class="text-primary mb-6 w-full text-3xl font-medium leading-tight">
                    </h3>
                    <div class="h-px w-full bg-gray-200 dark:bg-neutral-700"></div>
                    <div class="mt-6">
                        <ul id="modalDescription"
                            class="text-primary flex flex-col gap-3 text-left text-sm text-leading-24"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script defer>
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
</script>
