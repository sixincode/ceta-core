<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function mainMarketing()
    {
      return view('six-core::central.marketing.mainMarketing');
    }

    public function emailsMarketing()
    {
      return view('six-core::central.marketing.emailsMarketing');
    }

    public function referralsMarketing()
    {
      return view('six-core::central.marketing.referralsMarketing');
    }

    public function seoMarketing()
    {
      return view('six-core::central.marketing.seoMarketing');
    }

    public function analyticsMarketing()
    {
      return view('six-core::central.marketing.analyticsMarketing');
    }
}
