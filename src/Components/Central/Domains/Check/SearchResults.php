<?php

namespace Sixincode\SixCore\Components\Central\Domains\Check;

use Illuminate\View\Component;

class SearchResults extends Component
{
  public array $data;

  public function __construct($data = [])
  {
      $this->data = $data;
  }

  public function render()
  {
    return view('six-core::components.central.domains.check.searchResults',[
      'data' => $this->data,
    ]);
  }
}
