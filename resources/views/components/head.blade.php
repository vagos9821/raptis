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
            // Select all toggle buttons and their respective icons
            const darkModeToggles = document.querySelectorAll('[id="darkModeToggle"]');
            const darkIcons = document.querySelectorAll('[id="darkIcon"]');
            const lightIcons = document.querySelectorAll('[id="lightIcon"]');

            // Check for saved dark mode preference or system preference
            const darkMode = localStorage.getItem('darkMode');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            // Function to update all icons
            function updateAllIcons(isDark) {
                darkIcons.forEach(darkIcon => {
                    isDark ? darkIcon.classList.add('hidden') : darkIcon.classList.remove('hidden');
                });

                lightIcons.forEach(lightIcon => {
                    isDark ? lightIcon.classList.remove('hidden') : lightIcon.classList.add('hidden');
                });
            }

            // Function to toggle dark mode
            function toggleDarkMode() {
                const isDark = document.documentElement.classList.toggle('dark');
                localStorage.setItem('darkMode', isDark ? 'true' : 'false');
                updateAllIcons(isDark);
            }

            // Initialize dark mode
            if (darkMode === 'true' || (!darkMode && prefersDark)) {
                document.documentElement.classList.add('dark');
                updateAllIcons(true);
            } else {
                updateAllIcons(false);
            }

            // Add click event listener to all toggle buttons
            darkModeToggles.forEach(toggle => {
                toggle.addEventListener('click', toggleDarkMode);
            });

            // Listen for system theme changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                if (localStorage.getItem('darkMode') === null) {
                    const isDark = e.matches;
                    document.documentElement.classList.toggle('dark', isDark);
                    updateAllIcons(isDark);
                }
            });
        });
    </script>
</head>

<body class="bg-background text-primary">
