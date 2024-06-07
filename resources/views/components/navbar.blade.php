<nav class="fixed left-0 right-0 top-3 z-20 mx-auto w-11/12 max-w-screen-xl rounded-md bg-primary shadow-lg lg:w-full">
    <div class="flex items-center justify-between px-4 py-3 lg:px-8">
        <div>
            @svg('nav-logo')
        </div>
        {{-- Desktop --}}
        <div class="hidden flex-grow justify-center space-x-[100px] text-lg lg:flex">
            <a href="#" class="nav-link transition-colors duration-200 ease-in-out hover:text-accent">Αρχική</a>
            <a href="#about-us" class="nav-link transition-colors duration-200 ease-in-out hover:text-accent">Για εμάς</a>
            <a href="#contact-us"
                class="nav-link transition-colors duration-200 ease-in-out hover:text-accent">Επικοινωνία</a>
        </div>

        {{-- Mobile --}}
        <div id="menu"
            class="absolute right-0 top-[60px] flex hidden w-fit min-w-[200px] flex-col space-y-[20px] rounded-md bg-primary p-[10px] pt-[30px] shadow-md transition-opacity lg:hidden">
            <a href="#" class="nav-link transition-colors duration-200 ease-in-out hover:text-accent">Αρχική</a>
            <a href="#about-us" class="nav-link transition-colors duration-200 ease-in-out hover:text-accent">Για
                εμάς</a>
            <a href="#contact-us"
                class="nav-link transition-colors duration-200 ease-in-out hover:text-accent">Επικοινωνία</a>
        </div>
        <div id="burgerIcon" class="lg:hidden">
            <svg class="fill-background transition-all ease-in hover:cursor-pointer hover:fill-accent focus:fill-accent"
                width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6Z">
                </path>
                <path
                    d="M2 12.0322C2 11.4799 2.44772 11.0322 3 11.0322H21C21.5523 11.0322 22 11.4799 22 12.0322C22 12.5845 21.5523 13.0322 21 13.0322H3C2.44772 13.0322 2 12.5845 2 12.0322Z">
                </path>
                <path
                    d="M3 17.0645C2.44772 17.0645 2 17.5122 2 18.0645C2 18.6167 2.44772 19.0645 3 19.0645H21C21.5523 19.0645 22 18.6167 22 18.0645C22 17.5122 21.5523 17.0645 21 17.0645H3Z">
                </path>
            </svg>
        </div>

    </div>
</nav>
<script>
    document.getElementById('burgerIcon').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>
