<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSystem\Notify\Provider;

use PHPSystem\Notify\Notification;

interface Provider
{
    public function notify(Notification $notification);
}
