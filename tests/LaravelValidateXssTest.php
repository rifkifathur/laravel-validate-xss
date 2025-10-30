<?php

declare(strict_types=1);

namespace NayikiDev\LaravelValidateXss\Tests;

use NayikiDev\LaravelValidateXss\LaravelValidateXss;
use Orchestra\Testbench\TestCase;

final class LaravelValidateXssTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            \NayikiDev\LaravelValidateXss\LaravelValidateXssServiceProvider::class,
        ];
    }

    public function test_allows_clean_text(): void
    {
        $rule = new LaravelValidateXss();
        $passed = true;

        $rule->validate('content', 'Hello World', function () use (&$passed) {
            $passed = false;
        });

        $this->assertTrue($passed);
    }

    public function test_blocks_script_tags(): void
    {
        $rule = new LaravelValidateXss();
        $passed = true;

        $rule->validate('content', '<script>alert(1)</script>', function () use (&$passed) {
            $passed = false;
        });

        $this->assertFalse($passed);
    }

    public function test_blocks_inline_onclick_handlers(): void
    {
        $rule = new LaravelValidateXss();
        $passed = true;

        $rule->validate('content', '<div onclick="alert()">Click</div>', function () use (&$passed) {
            $passed = false;
        });

        $this->assertFalse($passed);
    }
}
