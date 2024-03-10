<?php

namespace Sixincode\SixCore\Http\Controllers\Central\Domains;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Sixincode\MsxNamecheap\Http\Requests\Api\V1\Central\Domains\CheckDomainRequest;
use Illuminate\Support\Facades\Http;

class ExtensionsDomainController extends Controller
{

  public function extensionDomains()
  {
    // $data = [];
    return Http::get(route('api.msx-namecheap.central.tlds.get'));
    // $result = Http::get(route('api.msx-namecheap.central.domains.check', 'rds.ca'));

    // $data   = $result['ApiResponse']['CommandResponse']['DomainCheckResult'];
    // $data   = $result;

    // dd($result['ApiResponse']);
    return view('six-core::central.domains.extensionDomains',[
      'data' => $data,
    ]);
  }


}
