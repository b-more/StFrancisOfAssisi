<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class GalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        DB::table('gallery_images')->truncate();

        // Define categories
        $categories = ['campus', 'events', 'students', 'activities', 'sports'];

        // Get all files from the gallery-image directory
        $files = File::files(storage_path('app/public/gallery-image'));

        foreach ($files as $index => $file) {
            // Get the filename
            $filename = $file->getFilename();

            // Skip if it's not an image file
            if (!in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif'])) {
                continue;
            }

            // Generate a title based on the filename
            $title = ucwords(str_replace(['-', '_'], ' ', pathinfo($filename, PATHINFO_FILENAME)));

            // Insert into database
            DB::table('gallery_images')->insert([
                'title' => $title,
                'description' => "This is a description for $title image",
                'filename' => $filename,
                'path' => 'gallery-image/' . $filename,
                'thumbnail_path' => 'gallery-image/' . $filename, // Same as path for now
                'category' => $categories[array_rand($categories)],
                'uploaded_by' => 1, // Assuming user ID 1 exists
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $this->command->info('Gallery images seeded successfully!');
    }
}
