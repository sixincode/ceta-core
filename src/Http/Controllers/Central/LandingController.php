<?php

namespace Sixincode\CetaCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function mainLanding()
    {
      return view('ceta-core::central.landing.mainLanding');
    }
}
