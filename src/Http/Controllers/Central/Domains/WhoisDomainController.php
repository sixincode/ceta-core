<?php

namespace Sixincode\SixCore\Http\Controllers\Central\Domains;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Sixincode\MsxNamecheap\Http\Requests\Api\V1\Central\Domains\CheckDomainRequest;
use Illuminate\Support\Facades\Http;

class WhoisDomainController extends Controller
{

  public function whoisDomains()
  {
    return view('six-core::central.domains.whois.whoisDomains');
  }

  public function whoisDomainsCheck(CheckDomainRequest $request)
  {
    // dd($request);
    $data =  null;
    //
    // // Checking availability
    // if (whoisInit()->isDomainAvailable($request['domain_search'])) {
    //     $available =  true;
    // }

    $available = whoisInit()->isDomainAvailable($request['domain_search']);
    if(!$available){
      $data = whois()->lookupData( $request['domain_search']);
    }
    // $data = Http::get(route('api.msx-namecheap.central.domains.check', $request['domain_search']));
    // dd($data);
    return view('six-core::central.domains.whois.whoisDomainsResult', [
      'data'      =>  $data,
      'available' =>  $available,
      'domain'    =>  $request['domain_search'],

    ]);
  }

}
