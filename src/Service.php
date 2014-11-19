<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSystem\Notify;

use PHPSystem\Notify\Provider\Provider;

class Service
{
    /**
     * @var Provider
     */
    protected $provider;

    /**
     * @param Provider $provider
     */
    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param $message
     */
    public function sendMessage($message)
    {
        $this->provider->notify(new Notification($message));
    }

    /**
     * @param Notification $notify
     */
    public function notify(Notification $notify)
    {
        $this->provider->notify($notify);
    }
}
