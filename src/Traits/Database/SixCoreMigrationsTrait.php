<?php

namespace Sixincode\SixCore\Traits\Database;

use Sixincode\SixCore\Database\Migrations as Migrations;

trait SixCoreMigrationsTrait
{
  public function migrateUp(): void
  {
    $migration = new Migrations\SixCoreTables;
    $migration->up();
  }

  public function migrateUpAll(): void
  {
    \HiveAlpha::migrateUp();
    \HivePosts::migrateUp();
    \HiveCommunity::migrateUp();
    \HiveNewsletter::migrateUp();
    $this->migrateUp();
  }

  public function migrateDown(): void
  {
    $migration = new Migrations\SixCoreTables;
    $migration->down();
  }

  public function migrateDownAll(): void
  {
    \HivePosts::migrateDown();
    \HiveAlpha::migrateDown();
    $this->migrateDown();
  }
}
