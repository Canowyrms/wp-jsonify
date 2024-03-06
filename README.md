# WP JSONIFY

This package is intended to be used by developers to quickly and easily check data/values in place of better methods.

Data, typically arrays or objects, is JSON-encoded and appended to the `window.JSONIFY` object in an inline-script element that `console.log`'s `JSONIFY` after each page load. Indeed, this is a quick and dirty way of doing it, but hey, it works. I find navigating JSON data in the console quite nice - better than `print_r` or `var_dump`.

This is very much a work-in-progress - expect some best-practices to have been neglected.


## Installation

Install this as a standard plugin, or install it as an mu-plugin alongside [Roots' must-use plugin autoloader](https://roots.io/bedrock/docs/mu-plugin-autoloader/).


## Usage

The `jsonify` method accepts three parameters:

- A string parameter containing a helpful name to reference what you're JSON-encoding.
- A mixed parameter that can be JSON-encoded (typically arrays or objects).
- A boolean parameter (default: false) you can pass if the data you're passing in is already JSON-encoded.

```php
use BK\JSONIFY\Utilities\JSONIFY;

JSONIFY::jsonify(
	// Required
	'helpful-name',
	// Required
	$dataToBeJsonEncoded,
	// Optional
	$alreadyJson // default: false
);

// For example, the $_ENV variable.
JSONIFY::jsonify('$_ENV', $_ENV)
```

---


## TODOs

Oh man. So many. Search for "TODO" in this directory.
