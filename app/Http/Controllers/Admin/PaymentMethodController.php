<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $methods = PaymentMethod::orderBy('order')->get();
        return view('admin.payments.index', compact('methods'));
    }

    public function create()
    {
        return view('admin.payments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'identifier' => 'required|unique:payment_methods',
            'instructions' => 'required',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        PaymentMethod::create($validated);

        return redirect()->route('admin.payments.index')->with('success', 'Payment method created.');
    }

    public function edit(PaymentMethod $payment)
    {
        return view('admin.payments.edit', compact('payment'));
    }

    public function update(Request $request, PaymentMethod $payment)
    {
        $validated = $request->validate([
            'name' => 'required',
            'instructions' => 'required',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        $payment->update($validated);

        return redirect()->route('admin.payments.index')->with('success', 'Payment method updated.');
    }
}
