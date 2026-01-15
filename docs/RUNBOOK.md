# Runbook

## Frontend demo
Open `frontend/index.html` in a browser.

## JS core
- `logic/estimate_core.js` is UI-independent business logic.

## Python verification
- `logic/estimate_core.py` mirrors JS rules.
- Run tests (example): `python -m pytest` (if available)

## PHP verification
- `logic/estimate_core.php` mirrors JS/Python rules.
- Run test: `php logic/test_estimate_core.php`
