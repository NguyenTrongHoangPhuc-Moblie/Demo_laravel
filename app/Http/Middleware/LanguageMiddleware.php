<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lấy ngôn ngữ từ session hoặc sử dụng mặc định là tiếng Anh
        $locale = session('locale', 'en');
        app()->setLocale($locale);

        return $next($request);
    }
}
