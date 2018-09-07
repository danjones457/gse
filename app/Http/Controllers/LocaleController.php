<?php

namespace App\Http\Controllers;

use App\Events\Locale\Update as LocaleUpdate;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LocaleController extends Controller
{
    /**
     * Create a new object instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     *
     *
     * @param  Illuminate\Http\Request  $request
     * @param  string  $locale
     * @return Illuminate\Http\Response
     */
    public function setLocale(Request $request, $locale)
    {
        if (!in_array($locale, config('app.locales'))) {
            $locale = config('app.fallback_locale');
        }

        $cookie = Cookie::queue('locale', $locale, 30);

        event(new LocaleUpdate($locale));

        return redirect()->back();
    }
}
