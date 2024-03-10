<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function mainContact()
    {
      return view('six-core::central.contact.mainContact');
    }
}
