<?php

namespace Sumandey7689\LaravelFileUpload;

use Illuminate\Support\ServiceProvider;

class FileUploadServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'file-upload');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/file-upload'),
        ]);
    }

    public function register()
    {
        //
    }
}
