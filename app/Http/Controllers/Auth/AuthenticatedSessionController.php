<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    // Authenticate the user
    $request->authenticate();

    // Regenerate the session
    $request->session()->regenerate();

    // Check the role of the authenticated user
    $user = $request->user();

    if ($user->role === 'admin') {
        return redirect('/index'); // Change this to your admin route
    } elseif ($user->role === 'user') {
        return redirect('/home');
    }

    // Fallback in case role is not recognized
    return redirect('/home'); // or another appropriate route
}

    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect('/home');
    // }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
