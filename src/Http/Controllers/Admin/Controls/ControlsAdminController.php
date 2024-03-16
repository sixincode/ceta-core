<?php

namespace Sixincode\CetaCore\Http\Controllers\Admin\Controls;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ControlsAdminController extends Controller
{
    public function adminControls()
    {
      return view('ceta-core::admin.controls.adminControls');
    }
}
