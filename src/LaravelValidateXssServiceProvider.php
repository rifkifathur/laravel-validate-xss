<?php

namespace NayikiDev\LaravelValidateXss;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class LaravelValidateXssServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Validator::extend('xss_protection', function ($attribute, $value, $parameters, $validator) {
            $rule = new LaravelValidateXss();
            $rule->validate($attribute, $value, function ($message) use ($validator, $attribute) {
                $validator->errors()->add($attribute, $message);
            });

            return true;
        });
    }
}
