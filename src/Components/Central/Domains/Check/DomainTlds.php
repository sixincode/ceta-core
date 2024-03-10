<?php

namespace Sixincode\SixCore\Components\Central\Domains\Check;

use Illuminate\View\Component;

class DomainTlds extends Component
{
  public function render()
  {
      return view('six-core::components.central.domains.check.domainTlds');
  }
}
