<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            $user = auth()->user();

            // Comprueba el rol del usuario
            switch ($user->id_rol) {
                case 2:
                case 1:
                    return route('paginas.index');
                    break;
                default:
                    return route('paginas.index');
            }
        }
    }
}
