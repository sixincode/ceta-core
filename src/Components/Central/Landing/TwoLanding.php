<?php

namespace Sixincode\CetaCore\Components\Central\Landing;

use Illuminate\View\Component;
use Sixincode\CetaCore\Models\Publication;

class TwoLanding extends Component
{
    public $publications;
    public function __construct(
      //
      )
    {
      $this->publications = Publication::whereReference("our_core")->get();

    }

    public function render()
    {
      return view('ceta-core::components.central.landing.twoLanding' );
    }
}
