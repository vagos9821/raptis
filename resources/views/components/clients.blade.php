<div class="bg-background">
    <div class="relative isolate px-6 lg:px-8">
        {{-- Background effect start --}}
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-secondary to-accent opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-accent to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1,44.1 100,61.6 97.5,26.9 85.5,0.1 80.7,2 72.5,32.5 60.2,62.4 52.4,68.1 47.5,58.3 45.2,34.5 27.5,76.7 0.1,64.9 17.9,100 27.6,76.8 76.1,97.7 74.1,44.1"
                fill="currentColor)">
            </div>
        </div>
        {{-- Background effect end --}}

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            {{-- Clients title --}}
            <h2 class="text-primary mb-[50px] text-[40px] font-bold tracking-tight">Πελάτες</h2>

            {{-- Client cards --}}
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($clients as $client)
                    @include('components.items.clients-card', ['clients' => $client])
                @endforeach
            </div>
        </div>
    </div>

</div>

</div>
