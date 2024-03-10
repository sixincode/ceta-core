<?php

use Illuminate\Support\Facades\Route;
use Sixincode\SixCore\Http\Controllers\Api\V1\Central as CentralApiControllers;

Route::middleware(
  config('six-core-middlewares.central.api', ['web']),
)->name('api.central.')->prefix('v1')->group(function () {

  // Route::post('/domains/search/{domain}',  [CentralApiControllers\DomainsApiController::class, 'searchDomain'])->name('domains.search');


});
