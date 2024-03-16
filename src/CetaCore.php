<?php

namespace Sixincode\CetaCore;

use Sixincode\CetaCore\Traits\Database as DatabaseTrait;

class CetaCore
{
  use DatabaseTrait\CetaCoreMigrationsTrait;
  use DatabaseTrait\CetaCoreSeedersTrait;
}
