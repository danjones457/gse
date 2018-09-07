<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\Transliterator;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class TransliterateStrings extends TransformsRequest
{
    /**
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * Transform the given value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
        if (in_array($key, $this->except, true)) {
            return $value;
        }

        if (!is_string($value)) {
            return $value;
        }

        if (preg_match("/[[:^print:]]/", $value)) {
            return Transliterator::transliterate($value);
        }

        return $value;
    }
}
