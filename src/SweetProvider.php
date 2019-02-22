<?php

namespace Laravelcode\LaravelSweet;

use Illuminate\Support\ServiceProvider;

class SweetProvider extends ServiceProvider
{

    const FILES_DIR = __DIR__ . '/Files/Helper.php';


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
        require :self:FILES_DIR;
    }
}
