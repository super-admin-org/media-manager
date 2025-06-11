<?php

namespace SuperAdmin\Admin\Media;

use SuperAdmin\Admin\Admin;

trait BootExtension
{
    /**
     * {@inheritdoc}
     */
    public static function boot()
    {
        static::registerRoutes();

        Admin::extend('media-manager', __CLASS__);
    }

    /**
     * Register routes for super-admin.
     *
     * @return void
     */
    protected static function registerRoutes()
    {
        parent::routes(function ($router) {
            /* @var \Illuminate\Routing\Router $router */
            $router->get('media', 'SuperAdmin\Admin\Media\MediaController@index')->name('media-index');
            $router->get('media/download', 'SuperAdmin\Admin\Media\MediaController@download')->name('media-download');
            $router->delete('media/delete', 'SuperAdmin\Admin\Media\MediaController@delete')->name('media-delete');
            $router->put('media/move', 'SuperAdmin\Admin\Media\MediaController@move')->name('media-move');
            $router->post('media/upload', 'SuperAdmin\Admin\Media\MediaController@upload')->name('media-upload');
            $router->post('media/folder', 'SuperAdmin\Admin\Media\MediaController@newFolder')->name('media-new-folder');
        });
    }

    /**
     * {@inheritdoc}
     */
    public static function import()
    {
        parent::createMenu('Media manager', 'media', 'icon-file');

        parent::createPermission('Media manager', 'ext.media-manager', 'media*');
    }
}
