<?php

namespace SCart\Core;

use Illuminate\Support\ServiceProvider;

class ScartHelperServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Load helper from front
        try {
            foreach (glob(__DIR__.'/Helpers/*.php') as $filename) {
                require_once $filename;
            }
        } catch (\Throwable $e) {
            $msg = '#SC001::Message: ' .$e->getMessage().' - Line: '.$e->getLine().' - File: '.$e->getFile();
            // sc_report($msg);
            echo $msg;
            exit;
        }
    }

}
