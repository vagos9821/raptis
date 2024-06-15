<div class="bg-background" id="categories">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-primary mb-[50px] text-[40px] font-bold tracking-tight">Προϊόντα</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @foreach ($categories as $category)
                @include('components.items.categories-card', ['category' => $category])
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div id="categoryModal" class="fixed inset-0 z-50 flex hidden items-center justify-center">
    <div id='modalOverlay' class="bg-accent absolute inset-0 opacity-50"></div>
    <div class="bg-background transform overflow-hidden rounded-lg shadow-xl transition-all sm:w-full sm:max-w-4xl">
        <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-center">
                <div
                    class="size-96 bg-background mx-auto flex flex-shrink-0 items-center justify-center rounded-full sm:mx-0">
                    <img id="modalImg" alt="Category Image" class="lg:size-96 size-12 rounded-full object-cover">
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                    <h3 id="modalTitle" class="text-primary mb-[25px] w-full text-[40px] font-medium leading-[1]"></h3>
                    @include('components.divider')
                    <div class="mt-[25px]">
                        <p id="modalDescription" class="text-primary flex flex-col gap-3 text-left text-sm"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-background px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            <button id="closeModal" type="button"
                class="focus:accent bg-accent text-primary inline-flex w-full justify-center rounded-md border border-transparent px-4 py-2 text-base font-medium shadow-sm hover:bg-primary hover:text-accent focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                Close
            </button>
        </div>
    </div>
</div>

<script>
    function showCategoryModal(img, name, desc) {
        document.getElementById('modalImg').src = img;
        document.getElementById('modalTitle').textContent = name;
        document.getElementById('modalDescription').innerHTML = '';

        if (desc) {
            const descArray = JSON.parse(desc);
            descArray.forEach(property => {
                const li = document.createElement('li');
                li.className = 'text-secondary text-[20px] leading[1.25]';
                li.textContent = property;
                document
                    .getElementById('modalDescription').appendChild(li);
            });
        }

        document.getElementById('categoryModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('categoryModal').classList.add('hidden');
    }

    document.getElementById('closeModal').addEventListener('click', closeModal);

    // Close modal on Escape key press
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });

    // Close modal on click outside the modal content
    document.getElementById('modalOverlay').addEventListener('click', closeModal);
</script>
