<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Cache;

class ExampleCacheController
{
    public function index(){
        Cache::add('key', 'test');

        if (Cache::has('key')) {
            var_dump(Cache::get('key'));
            die();
        }

        die('cache is empty');
    }
}
