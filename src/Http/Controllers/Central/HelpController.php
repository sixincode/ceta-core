<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function mainHelp()
    {
      return view('six-core::central.help.mainHelp');
    }
}
