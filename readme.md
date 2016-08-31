# Flash Messages for Laravel 5

[![Build Status](https://travis-ci.org/cuonggt/flash-message.svg?branch=master)](https://travis-ci.org/cuonggt/flash-message)
[![Latest Stable Version](https://poser.pugx.org/gtk/flash-message/v/stable)](https://packagist.org/packages/gtk/flash-message)
[![Total Downloads](https://poser.pugx.org/gtk/flash-message/downloads)](https://packagist.org/packages/gtk/flash-message)
[![Latest Unstable Version](https://poser.pugx.org/gtk/flash-message/v/unstable)](https://packagist.org/packages/gtk/flash-message)
[![License](https://poser.pugx.org/gtk/flash-message/license)](https://packagist.org/packages/gtk/flash-message)

## Installation

First, pull in the package through Composer.

Run `composer require gtk/flash-message`

And then, include the service provider within `config/app.php`.

```php
'providers' => [
    Gtk\FlashMessage\FlashMessageServiceProvider::class,
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    'FlashMessage' => Gtk\FlashMessage\FlashMessage::class
];
```

## Usage

Within your controllers, before you perform a redirect...

```php
public function store()
{
    FlashMessage::create('Title', 'Message!');

    return home();
}
```

You may also do:

- `FlashMessage::info('Title', 'Message!')`
- `FlashMessage::success('Title', 'Message!')`
- `FlashMessage::error('Title', 'Message!')`
- `FlashMessage::warning('Title', 'Message!')`
- `FlashMessage::overlay('Modal Title', 'Modal Message!')`

This will set a key in the session:

- `flash_message` - The array contains title, message you're flashing and level (A string that represents the type of notification which is good for applying HTML class names)

Alternatively, you may reference the `flash()` helper function, instead of the facade. Here's an example:

```php
/**
 * Destroy the user's session (logout).
 *
 * @return Response
 */
public function destroy()
{
    Auth::logout();

    flash()->success('Success', 'You have been logged out.');

    return home();
}
```

Or, for a general information flash, just do: `flash('Some title', 'Some message');`.

## License

The Flash Message is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
