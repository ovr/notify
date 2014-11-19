<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

include_once __DIR__ . '/../vendor/autoload.php';

use PHPSystem\Notify;

$service = new Notify\Service(Notify\ProviderFactory::getAvailable());
$service->sendMessage("Test");