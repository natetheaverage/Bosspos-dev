<?php namespace Bosspos\Commanding;

use Illuminate\Foundation\Application;
use Illuminate\Validation\Validator;

class ValidationCommandBus implements CommandBus {

	private $app;

	private $commandBus;

	private $commandTranslator;

	function __construct(Application $app, DefaultCommandBus $commandBus, CommandTranslator $commandTranslator)
	{
		$this->app = $app;
		$this->commandBus = $commandBus;
		$this->commandTranslator = $commandTranslator;
	}

	public function execute($command)
	{
		$validator = $this->commandTranslator->toValidator($command);

		if (class_exists($validator))
		{
			$this->app->make($validator)->validate($command);
		}

		return $this->commandBus->execute($command);
	}

}