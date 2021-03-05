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

if (!function_exists('cxl_storage')){
    function cxl_storage($path)
    {
        $path = asset('storage/pdf/'.$path);
        return $path;
    }
}

if(!function_exists('show_pdf')){
    function show_pdf($path){
        return response()->file($path);
    }
}
