{{-- Accent stripe --}}
<div class="bg-background">
    <div
        class="text-primary flex h-[200px] w-full items-center justify-around bg-gradient-to-r from-background/0 via-accent to-transparent text-center">
        <div class="text-l flex flex-col items-center justify-center lg:text-xl">
            @svg('bookmark')
            <p class="text-lg">{{ __('Διάκριση στην εξυπηρέτηση πελατών') }}</p>
        </div>
        <div class="text-l flex flex-col items-center justify-center lg:text-xl">
            @svg('globe')
            <p class="text-lg">{{ __('Υψηλή ποιότητα με εκλεκτές πρωτες ύλες') }}</p>
        </div>
        <div class="text-l flex flex-col items-center justify-center lg:text-xl">
            @svg('star')
            <p class="text-lg">{{ __('Συνεργάτες σε όλη την Ελλάδα') }}</p>
        </div>
    </div>
</div>
