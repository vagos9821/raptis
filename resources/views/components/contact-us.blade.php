<section class="text-primary z-30" id="contact-us">

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        {{-- Contact title --}}
        <h2 class="text-primary mb-[50px] text-2xl font-bold tracking-tight md:text-[40px]">
            {{ __('Επικοινωνία') }}</h2>
        <div class="grid grid-cols-1 gap-x-8 gap-y-8 lg:grid-cols-8">
            <div class="mx-auto lg:col-span-2 lg:py-12">
                {{-- Left side text --}}
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Αναλαμβάνουμε τσάντες για εκθέσεις και συνέδρια') }}
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Είμαστε πολύ ευέλικτοι στις παραγγελείες από 500 - 10.000 τεμάχια') }}
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Χρησιμοποιούμε απολύτως ανακυκλώσιμα υλικά') }}
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Μπορούμε να παραδώσουμε μέρος ή όλη την ποσότητα σε μια εβδομάδα.') }}
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Παραδόσεις κατόπιν συνεννοήσεως.') }}
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Παραδόση στην επιχείρηση σας ή σε πρακτορείο τηε αρεσκείας σας.') }}
                </p>
                @include('components.divider')
            </div>

            {{-- Contact Form --}}
            <div class="bg-primary scale-75 rounded-lg p-8 shadow-xl lg:col-span-4 lg:p-12">
                <form action="" class="space-y-4">
                    {{-- Name --}}
                    <div>
                        <label class="sr-only" for="name">{{ __('Name') }}</label>
                        <input class="bg-background w-full rounded-lg border-accent p-3 text-base md:text-lg"
                            placeholder="{{ __('Name') }}" type="text" id="name" autocomplete="cc-name"
                            name="name" />
                    </div>

                    {{-- Email and phone number --}}
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="sr-only" for="email">Email</label>
                            <input class="l bg-background w-full rounded-lg border-accent p-3 text-base md:text-lg"
                                placeholder="Email" type="email" id="email" autocomplete="email" name="email" />
                        </div>

                        <div>
                            <label class="sr-only" for="phone">{{ __('Phone') }}</label>
                            <input class="bg-background w-full rounded-lg border-accent p-3 text-base md:text-lg"
                                placeholder="{{ __('Phone') }}" type="tel" id="phone" autocomplete="tel"
                                name="phone" />
                        </div>
                    </div>

                    {{-- Options --}}
                    <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
                        <div>
                            <label for="Option1"
                                class="has-[:checked]:border-accent has-[:checked]:bg-background has-[:checked]:text-primary text-background block w-full cursor-pointer rounded-lg border border-background p-3 hover:border-accent dark:border-[#333]"
                                tabindex="0">
                                <input class="sr-only" id="Option1" type="radio" tabindex="-1" name="option" />
                                <span class="text-base md:text-lg">{{ __('Πελάτης') }}</span>
                            </label>
                        </div>

                        <div>
                            <label for="Option2"
                                class="has-[:checked]:border-accent has-[:checked]:bg-background has-[:checked]:text-primary text-background block w-full cursor-pointer rounded-lg border border-background p-3 hover:border-accent dark:border-[#333]"
                                tabindex="0">
                                <input class="sr-only" id="Option2" type="radio" tabindex="-1" name="option" />
                                <span class="text-base md:text-lg">{{ __('Συνεργασία') }}</span>
                            </label>
                        </div>

                        <div>
                            <label for="Option3"
                                class="has-[:checked]:border-accent has-[:checked]:bg-background has-[:checked]:text-primary text-background block w-full cursor-pointer rounded-lg border border-background p-3 hover:border-accent dark:border-[#333]"
                                tabindex="0">
                                <input class="sr-only" id="Option3" type="radio" tabindex="-1" name="option" />
                                <span class="text-base md:text-lg">{{ __('Άλλο') }}</span>
                            </label>
                        </div>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label class="sr-only" for="message">{{ __('Message') }}</label>
                        <textarea class="bg-background w-full rounded-lg border-accent p-3 text-base md:text-lg"
                            placeholder="{{ __('Message') }}" rows="8" id="message"></textarea>
                    </div>
                    {{-- Send Button --}}
                    <div class="mt-4">
                        <button type="submit" aria-label="Send message"
                            class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white hover:bg-accent hover:text-primary sm:w-auto">
                            {{ __('Αποστολή') }}
                        </button>
                    </div>
                </form>
            </div>
            {{-- Right side text --}}
            <div class="lg:col-span-2 lg:py-12">
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Η τσάντα αντιπροσωπεύει την ποιότητα των προϊόντων') }}
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Η τσάντα μπορεί να ανβαθμίσει την ποιότητα των προϊόντων') }}
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-base md:text-lg lg:text-xl">
                    {{ __('Η τσάντα παίζει σημαντικό επικοινωνιακό & προωθητικό ρόλο') }}
                </p>

                @include('components.divider')

                {{-- Right side main text --}}
                <div class="mt-8 text-center">
                    <p class="text-lg font-bold leading-8 text-accent md:text-xl lg:text-2xl xl:text-3xl xl:leading-10">
                        {{ __('Επιλέξτε μας για να δημιουργήσουμε την δική σας μοναδική τσάντα για το κατάστημα σας') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
