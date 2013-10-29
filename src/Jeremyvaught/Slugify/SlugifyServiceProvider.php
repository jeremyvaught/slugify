<?php namespace Jeremyvaught\Slugify;

use Illuminate\Support\ServiceProvider;

class SlugifyServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the app.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->package('jeremyvaught/slugify');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['slugify'] = $this->app->share(function($app)
		{
			return new Slugify;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('slugify');
	}

}