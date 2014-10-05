# Laravel Helper

Add Laravel 5 new helper in Laravel 4

Copy and paste `helpers.php` in this repo to laravel `app/` folder or whatever you want

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

`get`, `post`, `put`, `patch`, `delete`, `view`

### Additional helpers:

`group`, `pattern` and `when` (all for routes)
