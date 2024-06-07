<section class="bg-background text-primary" id="contact-us">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <h2 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Επικοινωνία</h2>
        <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-7">
            <div class="lg:col-span-2 lg:py-12">
                <p class="my-3 max-w-xl text-center text-xl">
                    Αναλαμβάνουμε τσάντες για εκθέσεις και συνέδρια
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-xl">
                    Είμαστε πολύ ευέλικτοι στις παραγγελείες από 500 - 10.000 τεμάχια
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-xl">
                    Χρησιμοποιούμε απολύτως ανακυκλώσιμα υλικά
                </p>
                @include('components.divider')
                <ul class="my-5 flex flex-col gap-3">
                    <li class="max-w-xl text-lg">
                        Μπορούμε να παραδώσουμε μέρος ή όλη την ποσότητα σε μια εβδομάδα.
                    </li>
                    <li class="max-w-xl text-lg">
                        Παραδόσεις κατόπιν συνεννοήσεως.
                    </li>
                    <li class="max-w-xl text-lg">
                        Παραδόση στην επιχείρηση σας ή σε πρακτορείο τηε αρεσκείας σας.
                    </li>
                </ul>
            </div>

            <div class="rounded-lg bg-primary p-8 shadow-lg lg:col-span-3 lg:p-12">
                <form action="#" class="space-y-4">
                    <div>
                        <label class="sr-only" for="name">Name</label>
                        <input class="w-full rounded-lg border-accent bg-background p-3" placeholder="Όνομα"
                            type="text" id="name" />
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="sr-only" for="email">Email</label>
                            <input class="w-full rounded-lg border-accent bg-background p-3" placeholder="Email"
                                type="email" id="email" />
                        </div>

                        <div>
                            <label class="sr-only" for="phone">Phone</label>
                            <input class="w-full rounded-lg border-accent bg-background p-3" placeholder="Τηλέφωνο"
                                type="tel" id="phone" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
                        <div>
                            <label for="Option1"
                                class="has-[:checked]:border-accent has-[:checked]:bg-background has-[:checked]:text-primary block w-full cursor-pointer rounded-lg border border-background p-3 text-background hover:border-accent"
                                tabindex="0">
                                <input class="sr-only" id="Option1" type="radio" tabindex="-1" name="option" />

                                <span class="">Επιλογή 1 </span>
                            </label>
                        </div>

                        <div>
                            <label for="Option2"
                                class="has-[:checked]:border-accent has-[:checked]:bg-background has-[:checked]:text-primary block w-full cursor-pointer rounded-lg border border-background p-3 text-background hover:border-accent"
                                tabindex="0">
                                <input class="sr-only" id="Option2" type="radio" tabindex="-1" name="option" />

                                <span class="">Επιλογή 2 </span>
                            </label>
                        </div>

                        <div>
                            <label for="Option3"
                                class="has-[:checked]:border-accent has-[:checked]:bg-background has-[:checked]:text-primary block w-full cursor-pointer rounded-lg border border-background p-3 text-background hover:border-accent"
                                tabindex="0">
                                <input class="sr-only" id="Option3" type="radio" tabindex="-1" name="option" />

                                <span class="">Επιλογή 3 </span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="sr-only" for="message">Message</label>

                        <textarea class="w-full rounded-lg border-accent bg-background p-3" placeholder="Μήνυμα" rows="8" id="message"></textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit"
                            class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white hover:bg-accent hover:text-primary sm:w-auto">
                            Αποστολή
                        </button>
                    </div>
                </form>
            </div>
            <div class="lg:col-span-2 lg:py-12">
                <p class="my-3 max-w-xl text-center text-xl">
                    Η τσάντα αντιπροσωπεύει την ποιότητα των προϊόντων
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-xl">
                    Η τσάντα μπορεί να ανβαθμίσει την ποιότητα των προϊόντων
                </p>
                @include('components.divider')
                <p class="my-3 max-w-xl text-center text-xl">
                    Η τσάντα παίζει σημαντικό επικοινωνιακό & προωθητικό ρόλο
                </p>

                @include('components.divider')

                <div class="mt-8 text-center">
                    <a href="#" class="text-2xl font-bold text-accent">Επιλέξτε μας για να
                        δημιουργήσουμε την δική σας μοναδική τσάντα για το κατάστημα σας </a>
                </div>
            </div>
        </div>
    </div>
</section>
