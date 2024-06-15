<!DOCTYPE html>

<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>e-Bags - ΡΑΠΤΗΣ ΛΕΩΝΙΔΑΣ</title>
    <meta name="description" content="Raptis Packing">
    @vite('resources/css/app.css')
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

    {{-- Dark mode button script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const htmlElement = document.documentElement;
            const toggleLightButton = document.getElementById('toggle-light');
            const toggleDarkButton = document.getElementById('toggle-dark');
            const toggleLightButtonMobile = document.getElementById('toggle-light-mobile');
            const toggleDarkButtonMobile = document.getElementById('toggle-dark-mobile');

            function toggleDarkMode() {
                htmlElement.classList.toggle('dark');
            }
            toggleLightButton.addEventListener('click', toggleDarkMode);
            toggleDarkButton.addEventListener('click', toggleDarkMode);
            toggleLightButtonMobile.addEventListener('click', toggleDarkMode);
            toggleDarkButtonMobile.addEventListener('click', toggleDarkMode);

            const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
            if (darkModeMediaQuery.matches) {
                htmlElement.classList.add('dark');
            }
        });
    </script>
</head>

<body class="bg-background text-primary">
