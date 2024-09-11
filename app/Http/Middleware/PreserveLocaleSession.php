<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreserveLocaleSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Save locale data before logout
        $locale = session('locale', config('app.locale'));
        $fallbackLocale = session('fallback_locale', config('app.fallback_locale'));
        $fakerLocale = session('faker_locale', config('app.faker_locale'));

        // Proceed with the request
        $response = $next($request);

        // Restore the locale session data after logout
        session()->put('locale', $locale);
        session()->put('fallback_locale', $fallbackLocale);
        session()->put('faker_locale', $fakerLocale);

        return $response;
    }
}
