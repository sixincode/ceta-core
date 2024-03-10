<?php

namespace Sixincode\SixCore\Components\Central\Domains;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class SearchDomain extends CardTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('six-core.defaultViews.searchDomainSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('six-core.defaultViews.searchDomainComponent');
  }

  public function setDefaultBase()
  {
    return $this->base = config('six-core.defaultViewsBase');
  }

}
