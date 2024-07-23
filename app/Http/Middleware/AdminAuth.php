<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->type != 1) {
            return redirect()->route('signin')->with('fail','Tài khoản không có quyền truy cập');
        }
        // elseif(Auth::check() && Auth::user()->type == 1){
        //     return redirect()->route('dashboard')->with('success','Đăng nhập thành công');
        // }
        return $next($request);
    }
}
