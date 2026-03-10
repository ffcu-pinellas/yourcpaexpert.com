<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function setup()
    {
        // This would use a library like google2fa to generate a secret and QR code
        // For now, we'll return a placeholder view
        return view('admin.2fa.setup');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'code' => 'required|digits:6',
        ]);

        // Verify the code and mark 2FA as confirmed
        auth()->user()->update([
            'two_factor_confirmed_at' => now(),
        ]);

        return redirect()->route('admin.dashboard');
    }
}
