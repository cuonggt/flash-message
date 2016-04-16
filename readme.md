# Flash Messages for Laravel 5

[![Build Status](https://travis-ci.org/cuonggt/flash-message.svg?branch=master)](https://travis-ci.org/cuonggt/flash-message)

## Installation

First, pull in the package through Composer.

Run `composer require gtk/flash-message`

And then, include the service provider within `config/app.php`.

```php
'providers' => [
    GTK\FlashMessage\FlashMessageServiceProvider::class,
];
```

## Usage

Within your controllers, before you perform a redirect...

```php
public function store()
{
    flash()->create('Title', 'Message!');

    return redirect()->to('/');
}
```

You may also do:

- `flash()->info('Title', 'Message!')`
- `flash()->success('Title', 'Message!')`
- `flash()->error('Title', 'Message!')`
- `flash()->warning('Title', 'Message!')`
- `flash()->overlay('Modal Title', 'Modal Message!')`

This will set a key in the session:

- `flash_message` - The array contains title, message you're flashing and level (A string that represents the type of notification which is good for applying HTML class names)

## License

The Flash Message is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
