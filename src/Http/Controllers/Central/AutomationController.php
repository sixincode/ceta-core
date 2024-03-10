<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AutomationController extends Controller
{
    public function mainAutomation()
    {
      return view('six-core::central.automation.mainAutomation');
    }
}
