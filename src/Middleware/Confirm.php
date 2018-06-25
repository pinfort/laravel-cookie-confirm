<?php

namespace Pinfort\LaravelCookieConfirm\Middleware;

use Closure;

class Confirm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->cookie('cookie_agree') == '1') {
            return $next($request);
        }
        if ($request->input('cookie_agree') == '1') {
            return $next($request)->cookie('cookie_agree', '1', 2628000);
        }
        $url_data = parse_url($request->fullUrl());
        $parsed_query = [];
        if (array_key_exists('query', $url_data)) {
            $amp_exploded = explode($url_data['query'], '&');
            foreach ($amp_exploded as $value) {
                $tmp = explode($value, '=');
                $parsed_query[$tmp[0]] = $tmp[1];
            }
        }
        $parsed_query['cookie_agree'] = '1';
        $query_string = http_build_query($parsed_query);
        $new_url = $url_data['scheme'].'://'.(array_key_exists('user', $url_data) ? $url_data['user'].':'.$url_data['pass'].'@' : '').$url_data['host'].(array_key_exists('port', $url_data) ? ':'.$url_data['port'] : '').$url_data['path'].'?'.$url_data['query'].(array_key_exists('fragment', $url_data) ? '#'.$url_data['fragment'] : '');
        return view('CookieConfirm::confirm', ['origin_link' => $new_url]);
    }
}
