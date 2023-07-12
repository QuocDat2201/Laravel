<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session('role_id') && session('role_id')==1){
            // Người dùng là quản trị viên, cho phép truy cập vào đường dẫn
            return $next($request);
        }

        // Người dùng không có quyền truy cập vào đường dẫn, chuyển hướng đến trang khác
        return redirect('/');
    }
}
