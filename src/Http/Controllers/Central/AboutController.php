<?php

namespace Sixincode\CetaCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function mainAbout()
    {
      return view('ceta-core::central.about.mainAbout');
    }
}
