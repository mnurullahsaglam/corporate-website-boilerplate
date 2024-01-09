<?php

if (!function_exists('getSetting')) {
    function getSetting(?string $key = null, $default = null)
    {
        if (is_null($key)) {
            return app('settings');
        }

        return app('settings')->get($key, $default);
    }
}

if (!function_exists('trimPhone')) {
    function trimPhone(string $phone): string
    {
        return str_replace(['(', ')', '-', ' '], '', $phone);
    }
}

if (!function_exists('cleanPhoneNumber')) {
    function cleanPhoneNumber(string $phone): string
    {
        // Remove non-numeric characters from the phone number
        $phone = preg_replace('/\D/', '', $phone);

        return $phone;
    }
}

if (!function_exists('formatTurkishPhoneNumber')) {
    function formatTurkishPhoneNumber(string $phone): string
    {
        $phone = preg_replace('/\D/', '', $phone);

        if (strlen($phone) === 10) {
            return '+90 ' . substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2);
        } elseif (strlen($phone) === 11) {
            return '+90 ' . substr($phone, 1, 3) . ' ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9, 2);
        } elseif (strlen($phone) === 12 || strlen($phone) === 13) {
            $phone = ltrim($phone, '+');
            return '+90 ' . substr($phone, 2, 3) . ' ' . substr($phone, 5, 3) . ' ' . substr($phone, 8, 2) . ' ' . substr($phone, 10, 2);
        }

        return $phone;
    }
}
