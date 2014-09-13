<?php namespace App\Providers;

use App, URL;
use App\Game;
use Illuminate\Routing\RouteServiceProvider as ServiceProvider;
use App\Http\Controllers\GamesController;

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


		$this->get('game', 'App\Game');
		$this->get('/', 'GamesController@index');
		$this->get('/create', 'GamesController@create');
		$this->get('edit/{game}', 'GamesController@edit');
		$this->get('/delete/{game}', 'GamesController@delete');

		$this->get('/find/{game}', 'GamesController@findGame');

		//get('/find/{game}', 'GamesController@findGame');


		// Handle form submissions.
		$this->post('/create', 'GamesController@handleCreate');
		$this->post('edit', 'GamesController@handleEdit');
		$this->post('/delete', 'GamesController@handleDelete');





	}

}