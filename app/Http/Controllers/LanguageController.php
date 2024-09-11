<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class LanguageController extends Controller
{
    public function __invoke(Request $request, $lang)
    {
        if (!array_key_exists($lang, config('languages'))) {
            return redirect()->back()->with('error', 'Unsupported language.');
        }

        $this->setAppLocale($lang);
        $this->setSessionLocale($lang);
        $this->updateLocaleCache($lang);

        return redirect()->back()->with('success', 'Language changed successfully.');
    }

    private function setAppLocale($lang)
    {
        App::setLocale($lang);
    }

    private function setSessionLocale($lang)
    {
        session()->put('locale', $lang);
        session()->put('fallback_locale', $lang);
        session()->put('faker_locale', $lang . '_' . strtoupper($lang));
    }

    private function updateLocaleCache($lang)
    {
        $cacheKey = 'app_locale';
        Cache::put($cacheKey, $lang, now()->addWeeks(1));
    }
}