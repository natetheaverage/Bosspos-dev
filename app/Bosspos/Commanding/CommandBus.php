<?php
/**
 * Created by PhpStorm.
 * User: natetheaverage
 * Date: 5/7/15
 * Time: 1:00 AM
 */
namespace Bosspos\Commanding;

interface CommandBus {

	public function execute($command);
}