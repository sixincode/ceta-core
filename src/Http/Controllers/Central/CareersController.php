<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function mainCareers()
    {
      return view('six-core::central.careers.mainCareers');
    }
}
