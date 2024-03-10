<?php

namespace Sixincode\SixCore\Http\Livewire\Central\Domains;

use Livewire\Component;

class FindDomains extends Component
{
  public $domainToInquire;
  public bool $inquireAvailability;
  public array $data;

  public function mount(
    $domainToInquire = null,
    $inquireAvailability = false,
    $data = [],
    )
  {
    $this->domainToInquire = $domainToInquire;
    $this->inquireAvailability = $inquireAvailability;
    $this->data = $data;
  }

  public function render()
  {
    return view('six-core::livewire.central.domains.findDomains');
  }

}
