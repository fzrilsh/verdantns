<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(env('APP_ENV') === 'maintenance') return response('<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Server Maintenance</title><style>body, html {height: 100%; margin: 0;} body {display: flex; justify-content: center; align-items: center; background-color: #f3f4f6; font-family: Arial, sans-serif;} h1 {font-size: 36px; font-weight: bold; color: #333; white-space: nowrap;}</style></head><body><h1>Server Maintenance</h1></body></html>');
        return $next($request);
    }
}
