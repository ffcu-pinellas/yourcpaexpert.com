<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTwoFactorEnabled
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && !$user->two_factor_confirmed_at && $request->is('admin/*') && !$request->is('admin/2fa*')) {
            return redirect()->route('admin.2fa.setup');
        }

        return $next($request);
    }
}
