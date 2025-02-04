<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Book;
use App\Models\Section;
use App\Models\Unit;

class GenerateSitemap extends Command
{
    // The name and signature of the console command.
    protected $signature = 'seo:generate-sitemap';

    // The console command description.
    protected $description = 'Generate the sitemap for the website';

    // Execute the console command.
    public function handle()
    {
        $this->info('Generating sitemap...');

        // Create a new sitemap
        $sitemap = Sitemap::create();

        // Add static URLs (like Home, About, Contact)
        $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'));  // Home page
        $sitemap->add(Url::create('/about-us')->setPriority(0.8)->setChangeFrequency('weekly'));  // About page
        $sitemap->add(Url::create('/contact-us')->setPriority(0.8)->setChangeFrequency('monthly'));  // Contact page
        $sitemap->add(Url::create('/test')->setPriority(0.8)->setChangeFrequency('monthly'));  // Contact page
        $sitemap->add(Url::create('/test-result')->setPriority(0.8)->setChangeFrequency('monthly'));  // Contact page

        // terms-and-conditions
        $sitemap->add(Url::create('/terms-and-conditions')->setPriority(0.8)->setChangeFrequency('monthly'));
        $sitemap->add(Url::create('/privacy-policy')->setPriority(0.8)->setChangeFrequency('monthly'));

        // Add the static URL for the books main page
        $sitemap->add(Url::create('/books')->setPriority(1.0)->setChangeFrequency('daily'));

        // Fetch all books from the database
        $books = Book::where('enabled', true)->get();

        foreach ($books as $book) {
            // Add the main book page (if necessary)
            $sitemap->add(Url::create("/book/{$book->slug}")
                ->setPriority(1.0)
                ->setChangeFrequency('daily'));

            // Add each section of the book
            $sections = $book->sections;  // Assuming each book has a 'sections' relationship
            foreach ($sections as $section) {
                // Add the section URL under the book (e.g., /section/{section-slug}/{book-slug})
                $sitemap->add(Url::create("/section/{$section->slug}/{$book->slug}")
                    ->setLastModificationDate($section->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency('monthly'));

                $sitemap->add(Url::create("/section-details/{$section->slug}")
                    ->setLastModificationDate($section->updated_at)
                    ->setPriority(0.7)
                    ->setChangeFrequency('monthly'));

                $units = $section->units;  // Assuming each section has a 'units' relationship
                foreach ($units as $unit) {
                    // Add the URL for each unit, e.g., /section-details/{section-slug}?unit={unit-id}
                    $sitemap->add(Url::create("/section-details/{$section->slug}?unit={$unit->id}")
                        ->setLastModificationDate($unit->updated_at)
                        ->setPriority(0.6)  // You can adjust the priority for units
                        ->setChangeFrequency('monthly'));
                }
            }
        }

        // Write the sitemap to the public folder
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
