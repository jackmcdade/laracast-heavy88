<?php

namespace Statamic\Quotefetcher;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tags\Quotefetcher::class,
    ];
    public function bootAddon()
    {
        //
    }
}
