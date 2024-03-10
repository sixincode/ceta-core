<?php

namespace Sixincode\SixCore\Http\Livewire\Central\Domains;

use Livewire\Component;

class TransferQueryDomains extends Component
{
  public $data;

  public function mount(
    $data = null,
    )
  {
    $this->data = $data;
  }

  public function render()
  {
    return view('six-core::livewire.central.domains.transfer.transferQueryDomain');
  }
}
