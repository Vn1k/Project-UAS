<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Carbon\Carbon;

class AuthenticatedSessionController extends Controller
{

    public function greetings()
    {
        $currentTime = Carbon::now();
        $hour = $currentTime->hour;

        if ($hour < 3) {
            $greetings = 'Selamat Malam';
        } elseif ($hour < 11) {
            $greetings = 'Selamat Pagi';
        } elseif ($hour < 15) {
            $greetings = 'Selamat Siang';
        } elseif ($hour < 18) {
            $greetings = 'Selamat Malam';
        }

        return $greetings;
    }

    /**
     * Display the login view.
     */
    public function create(): View
    {
        $greetings = $this->greetings();
        return view('admin.auth.login', ['greetings' => $greetings]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
