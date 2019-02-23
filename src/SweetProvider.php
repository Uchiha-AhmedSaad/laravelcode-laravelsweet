<?php

namespace Laravelcode\LaravelSweet;

use Illuminate\Support\ServiceProvider;
use Laravelcode\LaravelSweet\Traits\SweetHelper;

class SweetProvider extends ServiceProvider
{
    use SweetHelper;

    const FILES_DIR = __DIR__ . '/Files/Helper.php';

    public function boot()
    {
        $this->files();
        $this->loadJsonTranslationsFrom($this->get_trans_file_json());
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
        require self::FILES_DIR;
    }
}
