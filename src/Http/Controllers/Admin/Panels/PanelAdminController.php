<?php

namespace Sixincode\CetaCore\Http\Controllers\Admin\Panels;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class PanelAdminController extends Controller
{
    public function adminPanel()
    {
      return view('ceta-core::admin.panels.adminPanels');
    }
}
