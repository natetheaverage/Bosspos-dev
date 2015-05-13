<?php namespace Boss\Eventing; 

class EventListener {

	public function handle($event)
	{

		$eventName = $this->getEventName($event);



		if ($this->listenerIsRegistered($eventName))
		{
			return call_user_func([$this, 'when'.$eventName], $event);
		}
	}

	/**
	 * @param $event
	 * @return mixed
	 */
	protected function getEventName($event)
	{
		$eventName = (new \ReflectionClass($event))->getShortName();

		return $eventName;
	}

	/**
	 * @param $method
	 * @return bool
	 */
	protected function listenerIsRegistered($eventName)
	{
		$method = "when{$eventName}";
		return method_exists($this, $method);
	}
}