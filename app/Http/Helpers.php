<?php

use App\Helpers\Encrypter;
use App\Helpers\GoCardless;
use App\Helpers\IDEncrypter;
use App\Helpers\Slack;
use App\Repositories\LocaleRepository;
use Carbon\Carbon;

/**
 * Encrypt an ID using the ID encrypter class.
 *
 * @param  int  $id
 * @return string
 */
function id_encrypt($id)
{
    return (new IDEncrypter)->encrypt($id);
}

/**
 * Decrypt an encrypted ID using the ID encrypter class.
 *
 * @param  string  $string
 * @return int
 */
function id_decrypt($string)
{
    return (new IDEncrypter)->decrypt($string);
}

/**
 * Output an uppercase first letter for each word of a given name, phrase or sentence.
 *
 * @return string
 */
function str_initials($name = null)
{
    if (empty($name)) {
        return null;
    }

    $initials = "";

    foreach (explode(" ", trim($name)) as $string) {
        $initials .= strtoupper(isset($string[0]) ? $string[0] : '');
    }

    return $initials;
}

/**
 * Decrypt the given string.
 *
 * @param  string  $string
 * @param  string  $key
 * @return string
 */
function cc_decrypt($string, $key = null)
{
    return (new Encrypter)->decrypt($string, $key);
}

/**
 * Encrypt the given string.
 *
 * @param  string  $string
 * @param  string  $key
 * @return string
 */
function cc_encrypt($string, $key = null)
{
    return (new Encrypter)->encrypt($string, $key);
}

/**
 * @param  \Carbon\Carbon  $date
 * @return int
 */
function get_tax_year($date = null)
{
    if ($date == null) {
        $date = Carbon::now();
    }

    $beginning_year = +substr($date->year, -2);

    if ($date->month < 4 || ($date->month == 4 && $date->day < 6)) {
        $beginning_year--;
    }

    return $beginning_year.($beginning_year + 1);
}

/**
 * @param  string|null  $locale
 * @return \App\Repositories\LocaleRepository
 */
function locale($locale = null)
{
    return (new LocaleRepository($locale));
}

/**
 * @param  string  $host
 * @return string
 */
function get_locale_from_domain($host)
{
    if (stristr($host, '.ie')) {
        return 'ie';
    }

    return 'uk';
}

/**
 *
 */
function process_subscription_info()
{
    return (new GoCardless)->processSubscriptionInfo();
}

/**
 * @param  $old  float
 * @param  $new  float
 */
function update_price($old, $new)
{
    return (new GoCardless)->updateSubscriptionAmount($old, $new);
}

/**
 * @return int
 */
function intval_correct($amount)
{
    return intval(floor($amount + 0.5));
}

function send_slack($msg, $channel)
{
    return (new Slack)->sendSlack($msg, $channel);
}

/**
 * Use the normal distribution to generate a random number,
 * based on a specific mean and Standard Deviation.
 *
 * @param  float  $mean
 * @param  float  $sd
 * @return float
 */
function nrand($mean, $sd)
{
    $x = mt_rand() / mt_getrandmax();
    $y = mt_rand() / mt_getrandmax();
    return sqrt(-2 * log($x)) * cos(6.28319 * $y) * $sd + $mean;
}
