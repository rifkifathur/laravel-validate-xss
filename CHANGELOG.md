# Changelog

All notable changes to this project will be documented in this file.

The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [1.0.0] - 2025-10-27
### 🎉 Initial Release
- First stable release of **Laravel Validate XSS** package.
- Provides custom Laravel validation rule to prevent XSS injection in form inputs.
- Includes:
  - `no_js` validation rule for detecting `<script>` tags and inline JS (`onclick`, `onerror`, etc.).
  - Auto-registration via service provider.
  - Unit tests using PHPUnit 12 and Orchestra Testbench for Laravel 12 compatibility.
- Compatible with:
  - PHP 8.2+
  - Laravel 10, 11, and 12

## [1.0.1] - 2025-10-27
### 🎉 1.0.1 Release
- Update readme

---
