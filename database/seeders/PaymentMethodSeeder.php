<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        $methods = [
            [
                'name' => 'CashApp',
                'identifier' => 'cashapp',
                'instructions' => 'Send payment to $YourCPAExpert. Please include your Case ID in the note.',
                'order' => 1
            ],
            [
                'name' => 'Zelle',
                'identifier' => 'zelle',
                'instructions' => 'Send payment to payments@yourcpaexpert.com via Zelle.',
                'order' => 2
            ],
            [
                'name' => 'Wire Transfer',
                'identifier' => 'wire',
                'instructions' => 'Bank: Trusted Bank NA\nAccount: 123456789\nRouting: 987654321\nBeneficiary: Your CPA Expert LLC',
                'order' => 3
            ],
            [
                'name' => 'Apple Pay',
                'identifier' => 'apple-pay',
                'instructions' => 'Payment link will be sent to your registered phone number.',
                'order' => 4
            ],
            [
                'name' => 'Stripe / Cards',
                'identifier' => 'stripe',
                'instructions' => 'Pay securely via credit/debit card.',
                'order' => 5
            ],
        ];

        foreach ($methods as $method) {
            PaymentMethod::updateOrCreate(['identifier' => $method['identifier']], $method);
        }
    }
}
