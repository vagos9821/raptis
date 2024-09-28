<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Products;
use App\Models\Client;
use App\Models\CarouselItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'local@local.local',
            'password' => 'password',
            'admin' => 1,
        ]);

        Category::create([
            'name' => 'Χάρτινες τσάντες',
            'img' => '/raptis_photos/Optimized/La_Pupa.png',
            'desc' => [
                'el' => [
                    'Χειροποιήτες με κορδόνι - κορδέλα - ιμάντα',
                    'Εκτύπωση OFFSET - Πλαστικοποιήσεις - UV - Χρυσοτυπίες',
                    'Οποιοδήποτε μέγεθος',
                    'Με Πλακέ ή Στριφτό χεράκι',
                    'Οικολογική',
                    'Οικονομική λύση σε 5 στάνταρ μεγέθη',
                    'Μεγάλη ποικιλία χρωμάτων - 1 ή 2 χρώματα Εκτύπωση FLEXO',
                ],
                'en' => [
                    'Handmade with cord - ribbon - strap',
                    'OFFSET printing - Lamination - UV - Gold stamping',
                    'Any size',
                    'With flat or twisted handle',
                    'Eco-friendly',
                    'Economical solution in 5 standard sizes',
                    'Wide range of colors - 1 or 2 color FLEXO printing',
                ],
            ],
        ]);

        Category::create([
            'name' => 'Πλαστικές τσάντες',
            'img' => '/raptis_photos/Optimized/Cappuccini.png',
            'desc' => [
                'el' => [
                    'Όλων των τύπων με χεράκι ή χούφτα',
                    'Με ή χωρίς πιέτες εώς 3 χρώματα Εκτύπωση FLEXO',
                ],
                'en' => [
                    'All types with handle or grip',
                    'With or without pleats up to 3 colors FLEXO printing',
                ],
            ],
        ]);

        Category::create([
            'name' => 'Πάνινες Τσάντες & Θήκες',
            'img' => '/raptis_photos/Optimized/Jordan.png',
            'desc' => [
                'el' => [
                    'Χειροποιήτες - γαζωτές πολλά χρώματα',
                    'Σε διάφορους τύπους και μεγέθη με 1 χρώμα Εκτύπωση - Μεταξοτυπία',
                    'Δεν τσαλακώνεται',
                    'Δεν καταστρέφεται',
                    'Η μόνιμη διαφήμιση της επιχείρησης σας στα χέρια του πελάτη',
                ],
                'en' => [
                    'Handcrafted - stitched in many colors',
                    'In various types and sizes with 1-color printing - silkscreen',
                    'Does not wrinkle',
                    'Not destroyed',
                    'The permanent advertising of your business in the hands of the customer',
                ],
            ],
        ]);

        Category::create([
            'name' => 'Κουτιά - Χαρτί Περιτιλύγματων - Ε-Shop Φάκελοι',
            'img' => '/raptis_photos/Optimized/Shortcuts.png',
            'desc' => [
                'el' => [
                    'Χειροποιήτες - γαζωτές πολλά χρώματα',
                    'Σε διάφορους τύπους και μεγέθη με 1 χρώμα Εκτύπωση - Μεταξοτυπία',
                    'Τσάντα μοναδική',
                    'Δεν τσαλακώνεται',
                    'Δεν καταστρέφεται',
                    'Η μόνιμη διαφήμιση της επιχείρησης σας στα χέρια του πελάτη',
                ],
                'en' => [
                    'Handcrafted - stitched in many colors',
                    'In various types and sizes with 1-color printing - silkscreen',
                    'Unique bag',
                    'Does not wrinkle',
                    'Not destroyed',
                    'The permanent advertising of your business in the hands of the customer',
                ],
            ],
        ]);

        Category::create([
            'name' => 'Κορδέλες Τυπωμένες - Έντυπα - Αυτοκόλλητα - Κάρτες',
            'img' => '/raptis_photos/Optimized/Panellinios_Agora_games.png',
            'desc' => [
                'el' => [
                    'Χειροποιήτες - γαζωτές πολλά χρώματα',
                    'Σε διάφορους τύπους και μεγέθη με 1 χρώμα Εκτύπωση - Μεταξοτυπία',
                    'Τσάντα μοναδική',
                    'Δεν τσαλακώνεται',
                    'Δεν καταστρέφεται',
                    'Η μόνιμη διαφήμιση της επιχείρησης σας στα χέρια του πελάτη',
                ],
                'en' => [
                    'Handcrafted - stitched in many colors',
                    'In various types and sizes with 1-color printing - silkscreen',
                    'Unique bag',
                    'Does not wrinkle',
                    'Not destroyed',
                    'The permanent advertising of your business in the hands of the customer',
                ],
            ],
        ]);


        Client::create([
            'name' => 'Hondos Center',
            'img' => 'p1.jpg',
        ]);

        Client::create([
            'name' => 'Χαρμάνης',
            'img' => 'p2.jpg',
        ]);

        Client::create([
            'name' => 'Vodafone',
            'img' => 'p3.jpg',
        ]);

        Client::create([
            'name' => 'Rayban',
            'img' => 'p1.jpg',
        ]);

        CarouselItem::create([
            'image' => '/raptis_photos/Optimized/Bonjour.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla sem sed lorem auctor, non ultricies justo facilisis. Suspendisse non leo nisi. Integer et justo pharetra, efficitur neque eu, aliquam felis. Aenean a turpis eu eros vulputate pharetra.',
        ]);

        CarouselItem::create([
            'image' => '/raptis_photos/Optimized/No_Way.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-light',
            'text_content' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus malesuada, justo at fermentum cursus, eros ligula auctor velit, a sollicitudin mi magna ut velit. Donec ac ligula non lacus bibendum sodales eget ac nunc.',
        ]);

        CarouselItem::create([
            'image' => '/raptis_photos/Optimized/Panellinios_Agora_games.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Cras a dolor at ligula fermentum sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi id libero vitae dui pharetra sollicitudin at et magna. Sed vel nibh orci. Maecenas varius elit a nulla volutpat suscipit.',
        ]);

        CarouselItem::create([
            'image' => '/raptis_photos/Optimized/Jordan.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-light',
            'text_content' => 'Quisque eget nunc id felis ultricies tincidunt. Curabitur hendrerit neque sed sem luctus, id pharetra sapien tempus. Duis suscipit ante nec nisi fringilla, eget vehicula sem tincidunt. Morbi vitae eros vel metus dignissim fermentum. Nam scelerisque at mi id.',
        ]);

        CarouselItem::create([
            'image' => '/raptis_photos/Optimized/La_Pupa.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula nulla ac lectus sagittis, et auctor sapien lobortis. Phasellus ut erat dolor. Proin suscipit euismod ligula, in varius lectus ultricies nec. Curabitur sed leo sit amet odio dictum.',
        ]);

        Products::create([
            'name' => 'Χάρτινες τσάντες',
            'img' => [
                '/raptis_photos/Optimized/La_Pupa.png',
                '/raptis_photos/Optimized/Cappuccini.png',
                '/raptis_photos/Optimized/Jordan.png',
                '/raptis_photos/Optimized/Shortcuts.png',
                '/raptis_photos/Optimized/Panellinios_Agora_games.png',
            ],
            'desc' => [
                'el' => [
                    'Χειροποιήτες με κορδόνι - κορδέλα - ιμάντα',
                    'Εκτύπωση OFFSET - Πλαστικοποιήσεις - UV - Χρυσοτυπίες',
                    'Οποιοδήποτε μέγεθος',
                    'Με Πλακέ ή Στριφτό χεράκι',
                    'Οικολογική',
                    'Οικονομική λύση σε 5 στάνταρ μεγέθη',
                    'Μεγάλη ποικιλία χρωμάτων - 1 ή 2 χρώματα Εκτύπωση FLEXO',
                ],
                'en' => [
                    'Handmade with cord - ribbon - strap',
                    'OFFSET printing - Lamination - UV - Gold stamping',
                    'Any size',
                    'With flat or twisted handle',
                    'Eco-friendly',
                    'Economical solution in 5 standard sizes',
                    'Wide range of colors - 1 or 2 color FLEXO printing',
                ],
            ],
        ]);

        Products::create([
            'name' => 'Πλαστικές τσάντες',
            'img' => [
                '/raptis_photos/Optimized/Cappuccini.png',
                '/raptis_photos/Optimized/La_Pupa.png',
                '/raptis_photos/Optimized/Jordan.png',
                '/raptis_photos/Optimized/Shortcuts.png',
                '/raptis_photos/Optimized/Panellinios_Agora_games.png',
            ],
            'desc' => [
                'el' => [
                    'Όλων των τύπων με χεράκι ή χούφτα',
                    'Με ή χωρίς πιέτες εώς 3 χρώματα Εκτύπωση FLEXO',
                ],
                'en' => [
                    'All types with handle or grip',
                    'With or without pleats up to 3 colors FLEXO printing',
                ],
            ],
        ]);

        Products::create([
            'name' => 'Πάνινες Τσάντες & Θήκες',
            'img' => [
                '/raptis_photos/Optimized/Jordan.png',
                '/raptis_photos/Optimized/La_Pupa.png',
                '/raptis_photos/Optimized/Cappuccini.png',
                '/raptis_photos/Optimized/Shortcuts.png',
                '/raptis_photos/Optimized/Panellinios_Agora_games.png',
            ],
            'desc' => [
                'el' => [
                    'Χειροποιήτες - γαζωτές πολλά χρώματα',
                    'Σε διάφορους τύπους και μεγέθη με 1 χρώμα Εκτύπωση - Μεταξοτυπία',
                    'Δεν τσαλακώνεται',
                    'Δεν καταστρέφεται',
                    'Η μόνιμη διαφήμιση της επιχείρησης σας στα χέρια του πελάτη',
                ],
                'en' => [
                    'Handcrafted - stitched in many colors',
                    'In various types and sizes with 1-color printing - silkscreen',
                    'Does not wrinkle',
                    'Not destroyed',
                    'The permanent advertising of your business in the hands of the customer',
                ],
            ],
        ]);

        Products::create([
            'name' => 'Κουτιά - Χαρτί Περιτιλύγματων - Ε-Shop Φάκελοι',
            'img' => [
                '/raptis_photos/Optimized/Shortcuts.png',
                '/raptis_photos/Optimized/La_Pupa.png',
                '/raptis_photos/Optimized/Cappuccini.png',
                '/raptis_photos/Optimized/Jordan.png',
                '/raptis_photos/Optimized/Panellinios_Agora_games.png',
            ],
            'desc' => [
                'el' => [
                    'Χειροποιήτες - γαζωτές πολλά χρώματα',
                    'Σε διάφορους τύπους και μεγέθη με 1 χρώμα Εκτύπωση - Μεταξοτυπία',
                    'Τσάντα μοναδική',
                    'Δεν τσαλακώνεται',
                    'Δεν καταστρέφεται',
                    'Η μόνιμη διαφήμιση της επιχείρησης σας στα χέρια του πελάτη',
                ],
                'en' => [
                    'Handcrafted - stitched in many colors',
                    'In various types and sizes with 1-color printing - silkscreen',
                    'Unique bag',
                    'Does not wrinkle',
                    'Not destroyed',
                    'The permanent advertising of your business in the hands of the customer',
                ],
            ],
        ]);

        Products::create([
            'name' => 'Κορδέλες Τυπωμένες - Έντυπα - Αυτοκόλλητα - Κάρτες',
            'img' => [
                '/raptis_photos/Optimized/Panellinios_Agora_games.png',
                '/raptis_photos/Optimized/La_Pupa.png',
                '/raptis_photos/Optimized/Cappuccini.png',
                '/raptis_photos/Optimized/Jordan.png',
                '/raptis_photos/Optimized/Shortcuts.png',
            ],
            'desc' => [
                'el' => [
                    'Χειροποιήτες - γαζωτές πολλά χρώματα',
                    'Σε διάφορους τύπους και μεγέθη με 1 χρώμα Εκτύπωση - Μεταξοτυπία',
                    'Τσάντα μοναδική',
                    'Δεν τσαλακώνεται',
                    'Δεν καταστρέφεται',
                    'Η μόνιμη διαφήμιση της επιχείρησης σας στα χέρια του πελάτη',
                ],
                'en' => [
                    'Handcrafted - stitched in many colors',
                    'In various types and sizes with 1-color printing - silkscreen',
                    'Unique bag',
                    'Does not wrinkle',
                    'Not destroyed',
                    'The permanent advertising of your business in the hands of the customer',
                ],
            ],
        ]);
    }

}
