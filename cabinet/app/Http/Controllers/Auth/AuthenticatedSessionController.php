<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Models\UserDateLog;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        // UserDateLog::create([]);

        if (Auth::user()->role === 'admin') {
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
        if (Auth::user()->role === 'pharmacie') {
            return redirect()->intended(RouteServiceProvider::PHARMACIE);
        }
        if (Auth::user()->role === 'caisse') {
            return redirect()->intended(RouteServiceProvider::CAISSE);
        }
            return redirect("/login");
        

        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
