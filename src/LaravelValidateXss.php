<?php

namespace NayikiDev\LaravelValidateXss;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class LaravelValidateXss implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (is_array($value)) {
            foreach ($value as $item) {                
                if (preg_match('/(<([^>]+?)(on\w+\s*=\s*["\'].*?["\'])|(<[^>]+?(script|iframe|object|embed|form|style|img|input|a|audio|video|link|svg)[^>]*?>))/i', $item)) {
                    $message = str_replace(':attribute', $attribute, 'The :attribute input contains disallowed content.');
                    $fail($message);
                }
            }
        } else {            
            if (preg_match('/(<([^>]+?)(on\w+\s*=\s*["\'].*?["\'])|(<[^>]+?(script|iframe|object|embed|form|style|img|input|a|audio|video|link|svg)[^>]*?>))/i', $value)) {
                $message = str_replace(':attribute', $attribute, 'The :attribute input contains disallowed content.');
                $fail($message);
            }
        }
    }
}
