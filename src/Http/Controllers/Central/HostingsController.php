<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HostingsController extends Controller
{
    public function mainHostings()
    {
      return view('six-core::central.hostings.mainHostings');
    }

    public function webHostings()
    {
      return view('six-core::central.hostings.webHostings');
    }

    public function webBuilderHostings()
    {
      return view('six-core::central.hostings.webBuilderHostings');
    }

    public function onlineStoreHostings()
    {
      return view('six-core::central.hostings.onlineStoreHostings');
    }

    public function appsHostings()
    {
      return view('six-core::central.hostings.appsHostings');
    }

    public function vpsHostings()
    {
      return view('six-core::central.hostings.vpsHostings');
    }

    public function wordpressHostings()
    {
      return view('six-core::central.hostings.wordpressHostings');
    }

    public function sslHostings()
    {
      return view('six-core::central.hostings.sslHostings');
    }

    public function vpnHostings()
    {
      return view('six-core::central.hostings.vpnHostings');
    }

    public function backUpHostings()
    {
      return view('six-core::central.hostings.backUpHostings');
    }

    public function securityHostings()
    {
      return view('six-core::central.hostings.securityHostings');
    }
}
