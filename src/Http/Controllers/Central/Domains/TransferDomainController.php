<?php

namespace Sixincode\SixCore\Http\Controllers\Central\Domains;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Sixincode\MsxNamecheap\Http\Requests\Api\V1\Central\Domains\CheckDomainRequest;
use Illuminate\Support\Facades\Http;

class TransferDomainController extends Controller
{

    public function transferDomains()
    {
      return view('six-core::central.domains.transfer.transferDomain');
    }

    public function transferDomainsCheck(CheckDomainRequest $request)
    {
       $data = whois()->lookupData( $request['domain_search']);
       // dd($data);
       return view('six-core::central.domains.transfer.transferVerifyDomain', [
         'data' => $data,
       ]);
    }

}
