<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    public function mainDomains()
    {
      return view('six-core::central.domains.mainDomains');
    }

    public function findDomains()
    {
      return view('six-core::central.domains.findDomains');
    }

    public function transferDomains()
    {
      return view('six-core::central.domains.transferDomains');
    }

    public function extensionDomains()
    {
      return view('six-core::central.domains.extensionDomains');
    }

    public function whois()
    {
      return view('six-core::central.domains.whois');
    }
}
