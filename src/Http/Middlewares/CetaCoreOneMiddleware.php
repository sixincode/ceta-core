<?php

namespace Sixincode\CetaCore\Http\Middlewares;

use Closure;

class CetaCoreOneMiddleware
{
  public function handle($request, Closure $next)
  {
    //
    return $next($request);
  }
}
