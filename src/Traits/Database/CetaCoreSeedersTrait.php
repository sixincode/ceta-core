<?php

namespace Sixincode\CetaCore\Traits\Database;

use Sixincode\CetaCore\Database\Seeders as Seeders;

trait CetaCoreSeedersTrait
{
  public function seed(): void
  {
    $thid->seedOne();
    // $thid->seedTwo();
    // $thid->seedthree();
  }

  public function seedAll()
  {
    \HiveAlpha::seedAdmin();
    $this->seed();
  }

  public function seedOne(): void
  {
    $seeder = new Seeders\CetaCoreDatabaseSeeder;
    $seeder->run();
  }

}
