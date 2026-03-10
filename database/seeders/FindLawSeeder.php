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
                'slug' => 'tax',
                'is_published' => true,
                'meta_title' => 'Expert Tax Planning & Litigation Services | Your CPA Expert',
                'meta_description' => 'Navigate complex tax laws with our expert JD/CPA team.',
                'content' => 'Our tax division provides world-class litigation support and strategic planning for high-net-worth individuals and corporate entities.'
            ],
            [
                'title' => 'Real Estate Acquisition',
                'slug' => 'real-estate',
                'is_published' => true,
                'meta_title' => 'Strategic Real Estate Legal Counsel',
                'meta_description' => 'From commercial closings to 1031 exchanges, we protect your property interests.',
                'content' => 'We provide comprehensive legal support for commercial and residential real estate transactions, including complex asset swaps.'
            ],
        ];

        foreach ($pages as $p) {
            $page = Page::updateOrCreate(['slug' => $p['slug']], $p);
            
            // Hero Block
            Block::updateOrCreate(['page_id' => $page->id, 'type' => 'hero'], [
                'content' => [
                    'title' => $p['title'],
                    'subtitle' => 'Professional guidance for complex legal challenges.',
                    'button_text' => 'Get a Free Case Review',
                    'button_link' => '/contact'
                ],
                'order_column' => 1
            ]);

            // Text Block
            Block::updateOrCreate(['page_id' => $page->id, 'type' => 'text'], [
                'content' => [
                    'body' => '<h2>Why Choose Our ' . $p['title'] . ' Experts?</h2><p>' . $p['content'] . ' our team combines legal expertise with certified accounting precision to deliver unmatched results.</p><ul><li>Strategic Risk Assessment</li><li>International Compliance</li><li>High-Stakes Representation</li></ul>'
                ],
                'order_column' => 2
            ]);

            // CTA Block
            Block::updateOrCreate(['page_id' => $page->id, 'type' => 'cta'], [
                'content' => [
                    'title' => 'Ready to Secure Your Future?',
                    'text' => 'Speak with a senior partner today regarding your ' . strtolower($p['title']) . ' requirements.',
                    'btn_text' => 'Schedule Consultation',
                    'btn_link' => '/contact'
                ],
                'order_column' => 3
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
            ['title' => 'Estate Planning', 'slug' => 'estate'],
            ['title' => 'Corporate Audit', 'slug' => 'audit'],
            ['title' => 'Business Law', 'slug' => 'business'],
            ['title' => 'Asset Protection', 'slug' => 'asset-protection'],
        ];

        foreach ($morePages as $mp) {
            $p = Page::updateOrCreate(['slug' => $mp['slug']], [
                'title' => $mp['title'],
                'is_published' => true,
                'meta_title' => $mp['title'] . ' Services',
                'meta_description' => 'Professional ' . $mp['title'] . ' guidance.',
            ]);
            
            // Hero Block
            Block::updateOrCreate(['page_id' => $p->id, 'type' => 'hero'], [
                'content' => [
                    'title' => $p->title, 
                    'subtitle' => 'Expert advice for your ' . strtolower($p->title) . ' needs.',
                    'button_text' => 'Get a Free Consultation',
                    'button_link' => '/contact'
                ],
                'order_column' => 1
            ]);

            // Text Block
            Block::updateOrCreate(['page_id' => $p->id, 'type' => 'text'], [
                'content' => [
                    'body' => '<h2>Specialized ' . $mp['title'] . ' Solutions</h2><p>Our team of JD and CPA professionals provides comprehensive support for ' . strtolower($mp['title']) . ', ensuring both legal compliance and tax efficiency.</p><p>We specialize in high-stakes situations requiring extreme attention to detail and professional discretion.</p><ul><li>Strategic Advisory</li><li>Risk Mitigation</li><li>Executive Representation</li></ul>'
                ],
                'order_column' => 2
            ]);

            // CTA Block
            Block::updateOrCreate(['page_id' => $p->id, 'type' => 'cta'], [
                'content' => [
                    'title' => 'Secure Your ' . $mp['title'] . ' Strategy',
                    'text' => 'Consult with our senior partners to design a robust legal framework.',
                    'btn_text' => 'Speak with an Expert',
                    'btn_link' => '/contact'
                ],
                'order_column' => 3
            ]);
        }

        // 6. Payment Methods
        $payments = [
            ['name' => 'CashApp', 'identifier' => 'cashapp', 'instructions' => 'Send payment to $YourCPAExpert. Include invoice # in the note.', 'is_active' => true, 'order' => 1],
            ['name' => 'Zelle', 'identifier' => 'zelle', 'instructions' => 'Send payment to pay@yourcpaexpert.com.', 'is_active' => true, 'order' => 2],
            ['name' => 'Bank Wire', 'identifier' => 'wire', 'instructions' => 'Account: 12345678, Routing: 987654321. Bank: Chase Manhattan.', 'is_active' => true, 'order' => 3],
            ['name' => 'Stripe / Credit Card', 'identifier' => 'stripe', 'instructions' => 'Online payment link will be provided in your dashboard.', 'is_active' => false, 'order' => 4],
        ];

        foreach ($payments as $pay) {
            \App\Models\PaymentMethod::updateOrCreate(['identifier' => $pay['identifier']], $pay);
        }
    }
}
