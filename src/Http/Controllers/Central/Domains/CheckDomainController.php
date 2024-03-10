<?php

namespace Sixincode\SixCore\Http\Controllers\Central\Domains;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Sixincode\MsxNamecheap\Http\Requests\Api\V1\Central\Domains\CheckDomainRequest;
use Illuminate\Support\Facades\Http;

class CheckDomainController extends Controller
{
    public function mainDomains()
    {
      return view('six-core::central.domains.mainDomains');
    }

    public function checkDomains(CheckDomainRequest $request)
    {
      $data = [];
      
      if (whoisInit()->isDomainAvailable($request['domain_search'])) {
          return ;
      }

      $domain = whois()->verifyDomain($request['domain_search']);

      // $result = Http::get(route('api.msx-namecheap.central.domains.check', $domain));
      $result = Http::get("https://api.sandbox.namecheap.com/xml.response?ApiUser=6ixin&ApiKey=4cffc31b9b384d20b06f429dac52683f&UserName=6ixin&Command=namecheap.domains.check&ClientIp=69.159.169.41&DomainList=rds.ca");
      dd($result);
      $data   = $result['ApiResponse']['CommandResponse']['DomainCheckResult'];
      // dd($data['ApiResponse'] );
      return view('six-core::central.domains.findDomains', [
        'data' => $data,
      ]);
    }

    public function searchDomains()
    {
      // dd($request);
      // $data = Http::get(route('api.msx-namecheap.central.domains.search', $request['domain_search']));
      // return redirect()->route('api.msx-namecheap.central.domains.search', $request['domain_search']);
      return view('six-core::central.domains.findDomains',[
        'data'  => [],
      ]);
    }

    public function findDomains()
    {
      return view('six-core::central.domains.findDomains');
    }

}
