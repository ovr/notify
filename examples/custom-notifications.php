<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

include_once __DIR__ . '/../vendor/autoload.php';

use PHPSystem\Notify;

$service = new Notify\Service(Notify\ProviderFactory::getAvailable());

$notify = new Notify\Notification("Test notify 1");
$service->notify($notify);

$notify = new Notify\Notification("Test notify 2");
$service->notify($notify);