<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminUser
{
    /**
     * 返回请求过滤器
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->session()->get('admin_id')){
            return redirect()->guest('AdminLogin');
        }
        return $next($request);

    }

}