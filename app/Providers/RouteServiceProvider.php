<?php namespace App\Providers;

use App, URL;
use App\Post;
use Illuminate\Routing\RouteServiceProvider as ServiceProvider;
use App\Http\Controllers\PostsController;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * Called before routes are registered.
	 *
	 * Register any model bindings or pattern based filters.
	 *
	 * @return void
	 */
	public function before()
	{
		URL::setRootControllerNamespace(
			trim(config('namespaces.controller'), '\\')
		);
	}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map()
	{
		App::booted(function()
		{
			// Once the application has booted, we will include the default routes
			// file. This "namespace" helper will load the routes file within a
			// route group which automatically sets the controller namespace.
			$this->namespaced(function()
			{
				require app_path().'/Http/routes.php';
			});
		});


		$this->get('post', 'App\Post');
		$this->get('/', 'PostsController@index');
		$this->get('/create', 'PostsController@create');
		$this->get('edit/{post}', 'PostsController@edit');
		$this->get('/delete/{post}', 'PostsController@delete');

		$this->get('/find/{post}', 'PostsController@findGame');

		//get('/find/{game}', 'GamesController@findGame');


		// Handle form submissions.
		$this->post('/create', 'PostsController@handleCreate');
		$this->post('edit', 'PostsController@handleEdit');
		$this->post('/delete', 'PostsController@handleDelete');

	}

}