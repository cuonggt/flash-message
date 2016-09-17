# FlashMessage for Laravel 5

[![Build Status](https://travis-ci.org/cuonggt/flash-message.svg?branch=master)](https://travis-ci.org/cuonggt/flash-message)
[![Latest Stable Version](https://poser.pugx.org/gtk/flash-message/v/stable)](https://packagist.org/packages/gtk/flash-message)
[![Total Downloads](https://poser.pugx.org/gtk/flash-message/downloads)](https://packagist.org/packages/gtk/flash-message)
[![Latest Unstable Version](https://poser.pugx.org/gtk/flash-message/v/unstable)](https://packagist.org/packages/gtk/flash-message)
[![License](https://poser.pugx.org/gtk/flash-message/license)](https://packagist.org/packages/gtk/flash-message)

## Documentation

To get started with FlashMessage, add to your `composer.json` file as a dependency:

    composer require gtk/flash-message
    
### Configuration

After installing the FlashMessage library, register the `Gtk\FlashMessage\FlashMessageServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...
    
    Gtk\FlashMessage\FlashMessageServiceProvider::class,
];
```

### Basic Usage

Within your controllers, before you perform a redirect...

```php
public function update(UpdateProfileRequest $request)
{
    $request->user()->update($request->all());

    flash()->success('Success!', 'Profile successfully updated.');

    return redirect()->back();
}
```

You may also do:

- `flash()->info('Info Title!', 'Info Message.')`
- `flash()->error('Error Title!', 'Error Message.')`
- `flash()->warning('Warning Title!', 'Warning Message.')`
- `flash()->overlay('Modal Title!', 'Modal Message.')`

or even with custom key and custom level:

- `flash()->create('Custom Title!', 'Custom Message.', 'custom_level', 'custom_flash_message')`

Behind the scenes, this will set a key in the session. Default is `flash_message` (or whatever you pass to) whose value is an array contains title, message and level (A string that represents the type of notification which is good for applying HTML class names) you're flashing.

With this message flashed to the session, you may now display it in your view(s). Maybe something like:

```html
@if (session()->has('flash_message'))
    <div class="alert alert-{{ session('flash_message.level') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session('flash_message.title') }}</strong> {!! session('flash_message.message') !!}
    </div>
@endif
```

> Note that this package is optimized for use with Twitter Bootstrap.

Because flash messages and overlays are so common, if you want, you may use (or modify) the views that are included with this package. Simply append to your layout view:

```html
@include('flash-message::default')
```

### Example

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flash Message</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @include('flash-message::default')
        
            <h1>Flash Message</h1>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.1.0.min.js">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        <script>
            $('#flash-overlay-modal').modal();
        </script>
    </body>
</html>
```

If you need to modify the flash message partials, you can run:

```bash
php artisan vendor:publish
```

The default package view file `default.blade.php` will now be located in the `app/views/packages/gtk/flash-message/` directory.

## License

The FlashMessage is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
