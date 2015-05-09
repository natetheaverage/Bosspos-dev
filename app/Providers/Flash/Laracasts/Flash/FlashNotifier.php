<?php namespace  Boss\Providers\Flash\Laracasts\Flash;

class FlashNotifier
{

    /**
     * The session writer.
     *
     * @var SessionStore
     */
    private $session;

    /**
     * Create a new flash notifier instance.
     *
     * @param SessionStore $session
     */
    function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param string $message
     */
    public function info($message, $title = 'The more you know,', $style = 'body')
    {
        $this->message($message, $title, $style, 'info');

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param  string $message
     * @return $this
     */
    public function success($message, $title = 'Great news,', $style = 'body')
    {
        $this->message($message, $title, $style, 'success');

        return $this;
    }

    /**
     * Flash an error message.
     *
     * @param  string $message
     * @return $this
     */
    public function error($message, $title = 'Uh ohz,', $style = 'body')
    {
        $this->message($message, $title, $style, 'danger');

        return $this;
    }

    /**
     * Flash a warning message.
     *
     * @param  string $message
     * @return $this
     */
    public function warning($message, $title = 'Err...,', $style = 'body')
    {
        $this->message($message, $title, $style, 'warning');

        return $this;
    }

    /**
     * Flash an overlay modal.
     *
     * @param  string $message
     * @param  string $title
     * @return $this
     */
    public function overlay($message, $title = 'Notice')
    {
        $this->message($message, $title);

        $this->session->flash('flash_notification.overlay', true);
        $this->session->flash('flash_notification.title', $title);

        return $this;
    }

    /**
     * Flash a general message.
     *
     * @param  string $message
     * @param  string $level
     * @return $this
     */
    public function message($message, $title, $style = 'body', $level = 'info')
    {
		$this->session->flash('flash_notification.message', $message);
        $this->session->flash('flash_notification.title', $title);
        $this->session->flash('flash_notification.level', $level);
		$this->session->flash('flash_notification.style', $style);

        return $this;
    }

	/**
	 * Add an "important" flash to the session.
	 *
	 * @return $this
	 */
	public function timer($time)
	{
		$this->session->flash('flash_notification.timer', $time);

		return $this;
	}

    /**
     * Add an "important" flash to the session.
     *
     * @return $this
     */
    public function important()
    {
        $this->session->flash('flash_notification.important', true);

        return $this;
    }

}
