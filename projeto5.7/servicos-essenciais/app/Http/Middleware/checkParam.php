<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class checkParam
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $param)
    {
        //User logado
        //arr que armazena
        //if (attr == param) ? next(request) : redirect(login)

        Log::info('Foi invocado o meu primero middleware! [' . $param . ']');

        $process = $next($request);

        return $process;
    }
}
