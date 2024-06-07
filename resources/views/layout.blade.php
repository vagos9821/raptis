<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <title>e-Bags - ΡΑΠΤΗΣ ΛΕΩΝΙΔΑΣ</title>
    <meta name="description" content="Raptis Packing">
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar')
    <main class="flex flex-col">
        @include('components.hero')
        @include('components.divider')
        @include('components.categories')
        @include('components.divider')
        @include('components.about-us')
        @include('components.stripe')
        @include('components.clients')
        @include('components.divider')
        @include('components.contact-us')
        @include('components.divider')
        @include('carousel.index')
    </main>

    @include('components.footer')
</body>

</html>
