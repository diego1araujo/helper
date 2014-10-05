<?php

if ( ! function_exists('app'))
{
	/**
	 * Get the root Facade application instance.
	 *
	 * @param  string  $make
	 * @return mixed
	 */
	function app($make = null)
	{
		if ( ! is_null($make))
		{
			return app()->make($make);
		}

		return Illuminate\Support\Facades\Facade::getFacadeApplication();
	}
}

if ( ! function_exists('get'))
{
	/**
	 * Register a new GET route with the router.
	 *
	 * @param  string  $uri
	 * @param  \Closure|array|string  $action
	 * @return \Illuminate\Routing\Route
	 */
	function get($uri, $action)
	{
		return app('router')->get($uri, $action);
	}
}

if ( ! function_exists('post'))
{
	/**
	 * Register a new POST route with the router.
	 *
	 * @param  string  $uri
	 * @param  \Closure|array|string  $action
	 * @return \Illuminate\Routing\Route
	 */
	function post($uri, $action)
	{
		return app('router')->post($uri, $action);
	}
}

if ( ! function_exists('put'))
{
	/**
	 * Register a new PUT route with the router.
	 *
	 * @param  string  $uri
	 * @param  \Closure|array|string  $action
	 * @return \Illuminate\Routing\Route
	 */
	function put($uri, $action)
	{
		return app('router')->put($uri, $action);
	}
}

if ( ! function_exists('patch'))
{
	/**
	 * Register a new PATCH route with the router.
	 *
	 * @param  string  $uri
	 * @param  \Closure|array|string  $action
	 * @return \Illuminate\Routing\Route
	 */
	function patch($uri, $action)
	{
		return app('router')->patch($uri, $action);
	}
}

if ( ! function_exists('delete'))
{
	/**
	 * Register a new DELETE route with the router.
	 *
	 * @param  string  $uri
	 * @param  \Closure|array|string  $action
	 * @return \Illuminate\Routing\Route
	 */
	function delete($uri, $action)
	{
		return app('router')->delete($uri, $action);
	}
}

if ( ! function_exists('group'))
{
	/**
	 * Create a route group with shared attributes.
	 *
	 * @param  array   $attributes
	 * @param  \Closure $callback
	 * @return void
	 */
	function group(array $attributes, Closure $callback)
	{
		return app('router')->group($attributes, $callback);
	}
}

if ( ! function_exists('pattern'))
{
	/**
	 * Set a global where pattern on all routes
	 *
	 * @param  string  $key
	 * @param  string  $pattern
	 * @return void
	 */
	function pattern($key, $pattern)
	{
		return app('router')->pattern($key, $pattern);
	}
}

if ( ! function_exists('when'))
{
	/**
	 * Register a pattern-based filter with the router.
	 *
	 * @param  string  $pattern
	 * @param  string  $name
	 * @param  array|null  $methods
	 * @return void
	 */
	function when($pattern, $name, $methods = null)
	{
		return app('router')->when($pattern, $name, $methods);
	}
}

if ( ! function_exists('view'))
{
	/**
	 * Get the evaluated view contents for the given view.
	 *
	 * @param  string  $view
	 * @param  array   $data
	 * @param  array   $mergeData
	 * @return \Illuminate\View\View
	 */
	function view($view = null, $data = array(), $mergeData = array())
	{
		$factory = app('Illuminate\View\Factory');

		if (func_num_args() === 0)
		{
			return $factory;
		}

		return $factory->make($view, $data, $mergeData);
	}
}

if ( ! function_exists('share'))
{
	/**
	 * Add a piece of shared data to the environment.
	 *
	 * @param  string  $key
	 * @param  mixed   $value
	 * @return void
	 */
	function share($key, $value = null)
	{
		app('view')->share($view, $data, $mergeData);
	}
}
