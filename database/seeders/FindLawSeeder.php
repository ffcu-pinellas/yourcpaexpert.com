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
        // 4. Sample Leads
        $leads = [
            [
                'name' => 'Alice Thompson',
                'email' => 'alice@example.com',
                'phone' => '555-0192',
                'subject' => 'Tax Audit Support',
                'message' => 'I received a notice from the IRS and need expert representation for an upcoming audit.',
                'status' => 'new',
            ],
            [
                'name' => 'Robert Miller',
                'email' => 'robert@millercorp.com',
                'phone' => '555-8822',
                'subject' => 'Business Formation',
                'message' => 'Looking to restructure my LLC into an S-Corp for tax benefits.',
                'status' => 'contacted',
            ],
        ];

        foreach ($leads as $l) {
            \App\Models\Lead::updateOrCreate(['email' => $l['email']], $l);
        }

        // 5. Additional Practice Area Pages
        $morePages = [
            ['title' => 'Estate Planning', 'slug' => 'services/estate'],
            ['title' => 'Corporate Audit', 'slug' => 'services/audit'],
            ['title' => 'Business Law', 'slug' => 'services/business'],
            ['title' => 'Asset Protection', 'slug' => 'services/asset-protection'],
        ];

        foreach ($morePages as $mp) {
            $p = Page::updateOrCreate(['slug' => $mp['slug']], [
                'title' => $mp['title'],
                'meta_title' => $mp['title'] . ' Services',
                'meta_description' => 'Professional ' . $mp['title'] . ' guidance.',
            ]);
            
            Block::updateOrCreate(['page_id' => $p->id, 'type' => 'hero'], [
                'content' => ['title' => $p->title, 'subtitle' => 'Expert advice for your ' . strtolower($p->title) . ' needs.'],
                'order_column' => 1
            ]);
        }
    }
}
