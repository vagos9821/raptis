<div class="" id="hero">
    <div class="mx-w-[1440px] relative isolate flex h-[100vh] items-center justify-center px-6 pt-16 lg:px-8">
        {{-- Background effect start --}}
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-primary to-accent opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1,44.1 100,61.6 97.5,26.9 85.5,0.1 80.7,2 72.5,32.5 60.2,62.4 52.4,68.1 47.5,58.3 45.2,34.5 27.5,76.7 0.1,64.9 17.9,100 27.6,76.8 76.1,97.7 74.1,44.1"
                fill="currentColor)">
            </div>
        </div>
        {{-- Hero text --}}
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:max-w-6xl lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                {{-- Small desktop text --}}
                <div
                    class="text-primary relative rounded-full px-3 py-1 text-sm leading-6 ring-1 ring-primary/10 hover:ring-primary/20 xl:text-base">
                    {{ __('Χάρτινες τσάντες - είδη συσκευασίας...') }}
                    <a href="#categories" class="font-semibold text-accent">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        {{ __('Read more') }}
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <div class="text-center">
                {{-- Big text --}}
                <h1 class="text-primary text-2xl font-bold tracking-tight md:text-3xl">
                    {{ __('Η επιχείρηση μας ασχολείται με τις χάρτινες & πλαστικές τσάντες από το 1991 με ιδιαίτερη επιτυχία!') }}
                </h1>
                {{-- Small text --}}
                <p class="text-primary text-lg leading-5 opacity-75 md:mt-6 md:text-xl md:leading-10 xl:text-xl">
                    <span class="underline">{{ __('Είμαστε κάθετη μονάδα.') }}</span>
                    {{ __('Κατέχουμε όλο το πακέτο της συσκευασίας. Δημιουργούμε, τυπώνουμε, κατασκευάζουμε & παράγουμε τα προιόντα για να εξυπηρετήσουμε τις ανάγκες των επιχειρήσεων.') }}
                </p>
                {{-- Buttons --}}
                <div class="mt-3 flex flex-col items-center justify-center gap-3 gap-x-6 md:mt-10 md:gap-6 lg:flex-row">
                    <a href="#contact-us"
                        class="bg-accent text-background rounded-md px-3.5 py-2.5 text-sm font-semibold shadow-sm transition-colors duration-200 ease-in-out hover:bg-primary hover:text-accent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent xl:text-base">
                        {{ __('Επικοινωνία') }}
                    </a>
                    <a href={{ '/' . App::getLocale() . '/about-us' }}
                        class="text-primary text-sm font-semibold leading-6 transition-colors duration-200 ease-in-out hover:text-accent xl:text-base">
                        {{ __('Για εμάς') }}
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- Background effect end --}}
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-accent to-secondary opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</div>
