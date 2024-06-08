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
    <script>
        // Dark mode button
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
    <script>
        // Carousel
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function() {
                switch (cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont = 1;
                        break;
                    }
                    case 1: {
                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");
                        cont = 0;
                        break;
                    }
                }
            }, 8000);
        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }

        function sliderButton1() {
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 0
        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 1
        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");
            loopSlider();
        });
    </script>
</head>

<body class="bg-background text-primary">
