<nav class="fixed left-0 right-0 top-3 z-20 mx-auto w-11/12 max-w-screen-xl rounded-md bg-primary shadow-lg lg:w-full">
    <div class="flex items-center justify-between px-4 py-3 lg:px-8">
        <div>
            @svg('nav-logo')
        </div>
        <div class="hidden flex-grow justify-center space-x-6 lg:flex">
            <a href="/" class="nav-link">Αρχική</a>
            <a href="/about-us" class="nav-link">Για εμάς</a>
            <a href="/contact-us" class="nav-link">Επικοινωνία</a>
        </div>
        <div id="menu"
            class="absolute right-0 top-[60px] flex hidden w-1/2 flex-col rounded-md bg-primary p-[10px] shadow-md transition-opacity lg:hidden">
            <a href="/" class="nav-link">Αρχική</a>
            <a href="/about-us" class="nav-link">Για εμάς</a>
            <a href="/contact-us" class="nav-link">Επικοινωνία</a>
        </div>
        <div id="burgerIcon" class="lg:hidden">
            @svg('burger')
        </div>

    </div>
</nav>
<script>
    document.getElementById('burgerIcon').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>
