<?php
/**
 * @author Patsura Dmitry http://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSystem\Notify;

use PHPSystem\Notify\Provider\Provider;

class Service
{
    protected $provider;

    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
    }
} 