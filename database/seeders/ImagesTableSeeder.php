<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        $images = [
            'DSC_0013.JPG', 'DSC_0077.JPG', 'DSC_0146.JPG', 'DSC_0017_3.JPG', 'DSC_0078.JPG',
            'DSC_0159.JPG', 'DSC_0022.JPG', 'DSC_0079.JPG', 'DSC_0163.JPG', 'DSC_0025.JPG',
            'DSC_0083.JPG', 'DSC_0320.JPG', 'DSC_0027.JPG', 'DSC_0093.JPG', 'DSC_0323.JPG',
            'DSC_0029.JPG', 'DSC_0095.JPG', 'DSC_0326.JPG', 'DSC_0031.JPG', 'DSC_0103.JPG',
            'DSC_0345.JPG', 'DSC_0033.JPG', 'DSC_0107.JPG', 'DSC_0350.JPG', 'DSC_0040.JPG',
            'DSC_0140.JPG', 'DSC_0063.JPG', 'DSC_0145.JPG',
        ];

        foreach ($images as $image) {
            DB::table('images')->insert([
                'filename' => $image,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
