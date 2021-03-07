<?php
use Carbon\Carbon;

if (!function_exists('cxl_asset')) {
    function cxl_asset($path)
    {
        $timestamp = Carbon::now()->timestamp;
        $secure = config('app.force_ssl');

        $path = asset($path, $secure) . '?v=';
        $path .= config('app.debug') ? $timestamp : config('app.version');

        return $path;
    }
}

if (!function_exists('cxl_storage_admin')){
    function cxl_storage_admin($path)
    {
        $path = asset('storage/admin/'.$path);
        return $path;
    }
}

if (!function_exists('cxl_storage_client')){
    function cxl_storage_client($path)
    {
        $path = asset('storage/client/'.$path);
        return $path;
    }
}
if (!function_exists('cxl_storage_news')){
    function cxl_storage_news($path)
    {
        $path = asset('storage/images/'.$path);
        return $path;
    }
}

if(!function_exists('show_pdf')){
    function show_pdf($path){
        return response()->file($path);
    }
}

if (!function_exists('generate_random_string')) {
    function generate_random_string($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
