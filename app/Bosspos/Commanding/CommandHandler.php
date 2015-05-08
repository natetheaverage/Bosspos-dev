<?php namespace Bosspos\Commanding;

interface CommandHandler {

	/**
	 * Handel the command
	 * @param $command
	 * @return mixed
	 */
	public function handle($command);
}