# Laravel Validate XSS

A lightweight Laravel package that provides a **custom validation rule** to prevent **Cross-Site Scripting (XSS)** attacks in user input.

---

## 🚀 Features

✅ Detects and blocks:
- `<script>` tags  
- Inline JavaScript attributes (e.g., `onclick`, `onload`, etc.)  
- Dangerous input patterns like `javascript:` or `<img onerror=...>`

✅ Works with Laravel’s built-in `Validator` and FormRequest  
✅ Plug-and-play: no config required  

---

## Minimum Requirements

- PHP >= 8.1
- Laravel 10.x
- Composer

## 🧩 Installation

### 1️⃣ Add to your Laravel project

```bash
composer require nayikidev/laravel-validate-xss
```
### Using the Validation Rule
`'field' => ['xss_protection']`