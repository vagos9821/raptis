<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Client;
use App\Models\CarouselItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::create([
            'name' => 'Χάρτινες τσάντες',
            'img' => 'p1.jpg',
            'desc' => ['Χειροποιήτες με κορδόνι - κορδέλα - ιμάντα', 'Εκτύπωση OFFSET - Πλαστικοποιήσεις - UV - Χρυσοτυπίες', 'Οποιοδήποτε μέγεθος', 'Με Πλακέ ή Στριφτό χεράκι', 'Οικολογική', 'Οικονομική λύση σε 5 στάνταρ μεγέθη', 'Μεγάλη ποικιλία χρωμάτων - 1 ή 2 χρώματα Εκτύπωση FLEXO'],
        ]);

        Category::create([
            'name' => 'Πλαστικές τσάντες',
            'img' => 'p2.jpg',
            'desc' => ['Όλων των τύπων με χεράκι ή χούφτα', 'Με ή χωρίς πιέτες εώς 3 χρώματα Εκτύπωση FLEXO'],
        ]);

        Category::create([
            'name' => 'No Woven - Πάνινες Τσάντες & Θήκες',
            'img' => 'p3.jpg',
            'desc' => ['Χειροποιήτες - γαζωτές πολλά χρώματα', 'Σε διάφορους τύπους και μεγέθη με 1 χρώμα Εκτύπωση - Μεταξοτυπία', 'Τσάντα μοναδική', 'Δεν τσαλακώνεται', 'Δεν καταστρέφεται', 'Η μόνιμη διαφήμιση της επιχείρησης σας στα χέρια του πελάτη'],
        ]);

        Category::create([
            'name' => 'Κουτιά - Αυτοκόλλητα - Κάρτες',
            'img' => 'p4.webp',
            'desc' => [],
        ]);

        Category::create([
            'name' => 'Κορδέλες Τυπωμένες - Έντυπα',
            'img' => 'p1.jpg',
            'desc' => [],
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
            'image' => 'aboutUsImg.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla sem sed lorem auctor, non ultricies justo facilisis. Suspendisse non leo nisi. Integer et justo pharetra, efficitur neque eu, aliquam felis. Aenean a turpis eu eros vulputate pharetra.',
        ]);

        CarouselItem::create([
            'image' => 'p1.jpg',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-light',
            'text_content' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus malesuada, justo at fermentum cursus, eros ligula auctor velit, a sollicitudin mi magna ut velit. Donec ac ligula non lacus bibendum sodales eget ac nunc.',
        ]);

        CarouselItem::create([
            'image' => 'p2.jpg',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Cras a dolor at ligula fermentum sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi id libero vitae dui pharetra sollicitudin at et magna. Sed vel nibh orci. Maecenas varius elit a nulla volutpat suscipit.',
        ]);

        CarouselItem::create([
            'image' => 'p3.jpg',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-light',
            'text_content' => 'Quisque eget nunc id felis ultricies tincidunt. Curabitur hendrerit neque sed sem luctus, id pharetra sapien tempus. Duis suscipit ante nec nisi fringilla, eget vehicula sem tincidunt. Morbi vitae eros vel metus dignissim fermentum. Nam scelerisque at mi id.',
        ]);

        CarouselItem::create([
            'image' => 'p4.webp',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula nulla ac lectus sagittis, et auctor sapien lobortis. Phasellus ut erat dolor. Proin suscipit euismod ligula, in varius lectus ultricies nec. Curabitur sed leo sit amet odio dictum.',
        ]);
    }
}
