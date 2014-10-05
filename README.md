## Laravel Helper

Use new Laravel 5 helper in Laravel 4.

## How-to

Copy and paste `helpers.php` file in this repo to laravel `app/` folder or whatever you want

Require it in `bootstrap/start.php`

```php
require_once $app['path.base'].'/app/helpers.php';
```

So, you're done to use it.

## Examples:

### Group

```php
group(array('before' => 'auth'), function() {
// code
}
```

### Get

```php
get('page', array('as' => 'page', 'uses' => 'PageController@index'))
```

### View

```php
view('index')
```

### Helpers:

`get`, `post`, `put`, `patch`, `delete` and `view`

### Additional helpers (doesn't exist in laravel 5 yet):

`group`, `pattern`, `when` (all for routes) and `share` (for view)
