# Seven Summit Treks
<a href="https://sevensummittreks.com/">Seven Summit Treks</a>

## Code Details
Laravel version : ^10,

Php  version : ^8.1,

## Backup Latest Details
Last Code Backup : 09/18/2025,

Last Database Backup : 09/18/2025 (sevensummit_latest is new db)

## Backup Previous Details
Previous Code Backup : --/--/----,

Previous Database Backup : --/--/---- (MM/DD/YYYY)

## Previous Version Link
<a href=""></a>

## Notes
1. Tinymce installed
2. Needs sodium extension to run
3. Needs gmp extension to run
4. Web-token/jwt-framework version locked at 3.4.6 which works for laravel 10 for Himalaya Bank Limited (hbl) payment
5. Vendor/web-token/jwt-framework/Library/Checker/NotBeforeChecker.php "private readonly int $allowedTimeDrift = 5"(do it for hbl payment to work after vendor install or update)
6. Intervention image locked