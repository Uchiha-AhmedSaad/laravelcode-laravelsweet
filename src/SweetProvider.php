<?php

namespace Laravelcode\LaravelSweet;

use Illuminate\Support\ServiceProvider;

class SweetProvider extends ServiceProvider
{

    public function boot()
    {
        $this->files();
    }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }
    public function files()
    {
        require __DIR__ . '/Files/Helper.php';
    }
}
