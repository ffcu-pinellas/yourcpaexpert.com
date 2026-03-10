<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;
use App\Models\Page;
use App\Models\Block;
use App\Models\SiteSetting;
use Illuminate\Support\Str;

class FindLawSeeder extends Seeder
{
    public function run()
    {
        // 1. Site Settings
        $settings = [
            'firm_name' => 'Your CPA Expert',
            'firm_tagline' => 'World-Class Legal & Tax Advisory',
            'primary_color' => '#FA6400',
            'secondary_color' => '#002244',
            'contact_email' => 'contact@yourcpaexpert.com',
            'contact_phone' => '+1 (555) Find-Law',
            'address' => '123 Enterprise Way, Financial District, NY 10004',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value, 'group' => 'general', 'type' => 'text']);
        }

        // 2. Team Members
        $members = [
            [
                'name' => 'Jonathan R. Sterling, JD, CPA',
                'title' => 'Senior Managing Partner',
                'bio' => 'Jonathan specializes in complex tax litigation and high-stakes real estate acquisitions. With over 25 years of experience, he leads our international tax division.',
                'is_partner' => true,
                'order' => 1,
            ],
            [
                'name' => 'Elena Rodriguez, LLM',
                'title' => 'Head of Estate Planning',
                'bio' => 'Elena is a nationally recognized expert in trust management and wealth preservation. She has handled over $2B in estate transfers.',
                'is_partner' => true,
                'order' => 2,
            ],
            [
                'name' => 'Marcus Chen, CPA',
                'title' => 'Director of Corporate Audit',
                'bio' => 'Marcus manages internal compliance and forensic accounting for our Fortune 500 clients.',
                'is_partner' => false,
                'order' => 3,
            ],
        ];

        foreach ($members as $m) {
            TeamMember::updateOrCreate(['name' => $m['name']], $m);
        }

        // 3. Professional Pages
        $pages = [
            [
                'title' => 'Tax Planning & Litigation',
                'slug' => 'services/tax',
                'meta_title' => 'Expert Tax Planning & Litigation Services | Your CPA Expert',
                'meta_description' => 'Navigate complex tax laws with our expert JD/CPA team.',
            ],
            [
                'title' => 'Real Estate Acquisition',
                'slug' => 'services/real-estate',
                'meta_title' => 'Strategic Real Estate Legal Counsel',
                'meta_description' => 'From commercial closings to 1031 exchanges, we protect your property interests.',
            ],
        ];

        foreach ($pages as $p) {
            $page = Page::updateOrCreate(['slug' => $p['slug']], $p);
            
            // Add a hero block
            Block::updateOrCreate([
                'page_id' => $page->id,
                'type' => 'hero',
            ], [
                'content' => [
                    'title' => $p['title'],
                    'subtitle' => 'Professional guidance for complex legal challenges.',
                    'button_text' => 'Get a Free Case Review',
                    'button_link' => '/contact'
                ],
                'order_column' => 1
            ]);
        }
    }
}
