<?php

if (! function_exists('compiled_assets')) {
    function compiled_assets($path)
    {
        $manifestPath = public_path('build/manifest.json');
        if (!file_exists($manifestPath)) {
            return asset($path);
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);
        return isset($manifest[$path]) ? asset('build/' . $manifest[$path]['file']) : asset($path);
    }
}
