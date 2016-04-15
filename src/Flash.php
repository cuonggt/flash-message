<?php

namespace GTK\FlashMessage;

class Flash
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
    public function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    public function create($title, $message, $level = 'info', $key = 'flash_message')
    {
        $this->session->flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }

    /**
     * Flash an info message.
     *
     * @param string $title
     * @param string $message
     */
    public function info($title, $message)
    {
        $this->create($title, $message, 'info');
    }

    /**
     * Flash an success message.
     *
     * @param string $title
     * @param string $message
     */
    public function success($title, $message)
    {
        $this->create($title, $message, 'success');
    }

    /**
     * Flash an error message.
     *
     * @param string $title
     * @param string $message
     */
    public function error($title, $message)
    {
        $this->create($title, $message, 'error');
    }

    /**
     * Flash an warning message.
     *
     * @param string $title
     * @param string $message
     */
    public function warning($title, $message)
    {
        $this->create($title, $message, 'warning');
    }

    /**
     * Flash an overlay modal.
     *
     * @param string $title
     * @param string $message
     * @param string $level
     */
    public function overlay($title, $message, $level = 'info')
    {
        $this->create($title, $message, $level, 'flash_message_overlay');
    }
}