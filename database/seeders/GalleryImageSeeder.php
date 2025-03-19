<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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

        $this->command->info('Starting gallery image seeding process...');
        $this->command->info('Base path for images: ' . public_path('images'));

        $totalImagesFound = 0;
        $totalImagesProcessed = 0;

        // Process each category
        foreach ($categories as $category) {
            // Get all files from the category directory in public/images
            $categoryPath = public_path("images/{$category}");

            // Check if directory exists
            if (!File::exists($categoryPath)) {
                $this->command->warn("Directory not found: {$categoryPath}");
                continue;
            }

            $this->command->info("Processing category: {$category} (Path: {$categoryPath})");

            // Get files
            $files = File::files($categoryPath);
            $this->command->info("Found " . count($files) . " files in {$category} directory");

            $totalImagesFound += count($files);

            foreach ($files as $file) {
                // Get the filename
                $filename = $file->getFilename();

                // Debug output for each file
                $this->command->info("Processing file: {$filename} (Extension: {$file->getExtension()})");

                // Skip if it's not an image file
                if (!in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $this->command->warn("Skipping non-image file: {$filename}");
                    continue;
                }

                // Generate a title based on the filename
                $title = ucwords(str_replace(['-', '_'], ' ', pathinfo($filename, PATHINFO_FILENAME)));

                // Build the path
                $path = "images/{$category}/{$filename}";

                // Insert into database
                try {
                    DB::table('gallery_images')->insert([
                        'title' => $title,
                        'description' => "This is a description for $title image",
                        'filename' => $filename,
                        'path' => $path,
                        'thumbnail_path' => $path, // Same as path for now
                        'category' => $category, // Use the actual category from folder structure
                        'uploaded_by' => 1, // Assuming user ID 1 exists
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);

                    $totalImagesProcessed++;
                    $this->command->info("Inserted {$filename} into database (Path: {$path})");
                } catch (\Exception $e) {
                    $this->command->error("Failed to insert {$filename}: " . $e->getMessage());
                }
            }
        }

        $this->command->info("Total images found: {$totalImagesFound}");
        $this->command->info("Total images processed and inserted: {$totalImagesProcessed}");

        if ($totalImagesProcessed === 0) {
            if ($totalImagesFound === 0) {
                $this->command->error("No image files were found in any of the category directories!");
                $this->command->line("Please check that you have created the following directories and added image files:");

                foreach ($categories as $category) {
                    $this->command->line(" - " . public_path("images/{$category}"));
                }
            } else {
                $this->command->error("Files were found but none were processed successfully. Check the previous error messages.");
            }
        } else {
            $this->command->info('Gallery images seeded successfully!');
        }
    }
}
