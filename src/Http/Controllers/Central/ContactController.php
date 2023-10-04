<?php

namespace Sixincode\CetaCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function mainContact()
    {
      return view('ceta-core::central.contact.mainContact');
    }
}
