<?php

namespace SuperAdmin\Admin\Media;

use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Template-aware: <views>/<template>/ and <template>/extensions/super-admin-media/ override <views>/.
        if (class_exists(\SuperAdmin\Admin\Template\TemplateManager::class)) {
            \SuperAdmin\Admin\Facades\Admin::template()->extensionViews('super-admin-media', __DIR__.'/../resources/views');
        } else {
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'super-admin-media');
        }

        MediaManager::boot();
    }
}
