<?php

namespace Sixincode\CetaCore\Traits\Database;

use Sixincode\CetaCore\Database\Seeders as Seeders;

trait CetaCoreSeedersTrait
{
  public function seed(): void
  {
    $this->seedOne();
    // $thid->seedTwo();
    // $thid->seedthree();
  }

  public function seedAll()
  {
    \HiveAlpha::seedAdmin();
    \HiveCommunity::seed();
    \HiveNewsletter::seed();
    $this->seed();
  }

  public function seedOne(): void
  {
    $seeder = new Seeders\CetaCoreDatabaseSeeder;
    $seeder->run();
  }

}
