<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsPage;

class CmsPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cmsPageRecords =[
            [
                'id' => 1, 
                'title' => 'About Us', 
                'description' => 'This is About Page', 
                'url' => 'about-us',
                'meta_title' => 'About Us',
                'meta_description' => 'About Us Content',
                'meta_keywords' => 'about us, about',
                'status' => 1,
            ],
            [
                'id' => 2, 
                'title' => 'Terms & Conditions', 
                'description' => 'This is Terms and Conditions Page', 
                'url' => 'terms-conditions',
                'meta_title' => 'Terms & Conditions',
                'meta_description' => 'Terms & Conditions Content',
                'meta_keywords' => 'terms and conditions, terms, conditions',
                'status' => 1,
            ],
            [
                'id' => 3, 
                'title' => 'Privacy Policy', 
                'description' => 'This is Privacy Policy Page', 
                'url' => 'privacy-policy',
                'meta_title' => 'Privacy Policy',
                'meta_description' => 'Privacy Policy Content',
                'meta_keywords' => 'privacy policy, privacy, policy',
                'status' => 1,
            ],
        ];

        CmsPage::insert($cmsPageRecords);
    }
}
