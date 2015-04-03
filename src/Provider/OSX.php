<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSystem\Notify\Provider;

use PHPSystem\Notify\Notification;

class NotifySend implements Provider
{
    public function notify(Notification $notification)
    {
        exec('osascript -e \'display notification "' . $notification->getMessage() . '"\'');
    }
}
