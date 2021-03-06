<?php namespace Illuminate\Routing\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class ControllerMakeCommand extends GeneratorCommand {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'make:controller';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new resource controller class';

	/**
	 * The type of class being generated.
	 *
	 * @var string
	 */
	protected $type = 'Controller';

	/**
	 * Set the configuration key for the namespace.
	 *
	 * @var string
	 */
	protected $configKey = 'controllers';

	/**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		if ($this->option('plain'))
		{
			return __DIR__.'/stubs/controller.plain.stub';
		}
		else
		{
			return __DIR__.'/stubs/controller.stub';
		}
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('plain', null, InputOption::VALUE_NONE, 'Generate an empty controller class.'),
		);
	}

}
