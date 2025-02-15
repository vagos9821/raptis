<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="#">
    <title>{{ __('e-Bags - ΡΑΠΤΗΣ ΛΕΩΝΙΔΑΣ') }}</title>
    <meta name="description" content="Raptis Packing">
    <meta name="theme-color" content="#d5ab67" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="./node_modules/preline/dist/preline.js"></script> --}}
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js" defer type="module"></script>
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="x-default" href="http://raptis.test/" />
    <link rel="alternate" hreflang="el" href="http://raptis.test/el/" />
    <link rel="alternate" hreflang="en" href="http://raptis.test/en/" />

    {{-- Dark mode button script --}}
    <script defer type="module">
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const darkIcon = document.getElementById('darkIcon');
            const lightIcon = document.getElementById('lightIcon');

            // Check for saved dark mode preference or system preference
            const darkMode = localStorage.getItem('darkMode');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            // Function to update the icons
            function updateIcons(isDark) {
                if (isDark) {
                    darkIcon.classList.add('hidden');
                    lightIcon.classList.remove('hidden');
                } else {
                    darkIcon.classList.remove('hidden');
                    lightIcon.classList.add('hidden');
                }
            }

            // Function to toggle dark mode
            function toggleDarkMode() {
                const isDark = document.documentElement.classList.toggle('dark');
                localStorage.setItem('darkMode', isDark ? 'true' : 'false');
                updateIcons(isDark);
            }

            // Initialize dark mode
            if (darkMode === 'true' || (!darkMode && prefersDark)) {
                document.documentElement.classList.add('dark');
                updateIcons(true);
            } else {
                updateIcons(false);
            }

            // Add click event listener
            darkModeToggle.addEventListener('click', toggleDarkMode);
        });
    </script>
</head>

<body class="bg-background text-primary">
