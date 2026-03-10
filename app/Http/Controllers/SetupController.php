<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class SetupController extends Controller
{
    public function index()
    {
        // Check if already installed (e.g., users table exists and has entries)
        try {
            if (Schema::hasTable('users') && User::count() > 0) {
                return redirect('/')->with('info', 'System already installed.');
            }
        } catch (\Exception $e) {
            // Table doesn't exist, proceed to setup
        }

        return view('setup.index');
    }

    public function install(Request $request)
    {
        $request->validate([
            'admin_name' => 'required',
            'admin_email' => 'required|email',
            'admin_password' => 'required|min:8|confirmed',
        ]);

        try {
            // Run migrations
            Artisan::call('migrate --force');
            Artisan::call('db:seed --force');

            // Create first Super Admin
            User::create([
                'name' => $request->admin_name,
                'email' => $request->admin_email,
                'password' => Hash::make($request->admin_password),
                // Mandatory 2FA will be prompted on first login
            ]);

            return redirect('/admin/dashboard')->with('success', 'Installation complete! Please log in.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Installation failed: ' . $e->getMessage()]);
        }
    }
}
