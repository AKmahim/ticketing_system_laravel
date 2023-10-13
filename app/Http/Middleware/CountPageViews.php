<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class CountPageViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the current route's name or URI as the page name
        $pageName = $request->route()->getName() ?? $request->path();

        // Check if the page name exists in the database
        $pageView = DB::table('page_views')->where('page_name', $pageName)->first();

        if ($pageView) {
            // If the page name exists, increment the views count
            DB::table('page_views')->where('page_name', $pageName)->increment('views');
        } else {
            // If the page name doesn't exist, create a new record with views = 1
            DB::table('page_views')->insert(['page_name' => $pageName, 'views' => 1]);
        }

        return $next($request);
    }
}
