<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSystem\Notify;

class Notification
{
    protected $message;

    protected function __construct($message)
    {
        $this->message = $message;
    }
}
