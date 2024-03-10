<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function mainServices()
    {
      return view('six-core::central.services.mainServices');
    }
}
