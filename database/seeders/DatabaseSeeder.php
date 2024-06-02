<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Client;
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
            'name' => 'Public',
            'img' => 'p4.webp',
            'desc' => [],
        ]);

        Category::create([
            'name' => 'Γερμανός',
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
            'name' => 'Swarswki',
            'img' => 'p4.webp',
        ]);

        Client::create([
            'name' => 'Rayban',
            'img' => 'p1.jpg',
        ]);
    }
}
