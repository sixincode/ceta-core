<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    public function mainDiscover()
    {
      return view('six-core::central.discover.mainDiscover');
    }
}
