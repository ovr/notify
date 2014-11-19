Notify
======

> Notify user in OS 


# How to use


First you need to get service with provider into it:

```php
use PHPSystem\Notify;

$service = new Notify\Service(ProviderFactory::getAvailable());
```

How to send text:

```php
$service->sendMessage("my simple test");
```

License
-------

This project is open-sourced software licensed under the MIT License. See the LICENSE file for more information.
