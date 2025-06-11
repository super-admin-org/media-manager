<?php

namespace SuperAdmin\Admin\Media;

use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'super-admin-media');

        MediaManager::boot();
    }
}
