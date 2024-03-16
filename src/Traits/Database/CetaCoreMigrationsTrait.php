<?php

namespace Sixincode\CetaCore\Traits\Database;

use Sixincode\CetaCore\Database\Migrations as Migrations;

trait CetaCoreMigrationsTrait
{
  public function migrateUp(): void
  {
    $this->migrateCetaCoreOneUp();
    // $this->migrateCetaCoreTwoUp();
    // $this->migrateCetaCoreThreeUp();
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
    $this->migrateCetaCoreOneDown();
    // $this->migrateCetaCoreTwoDown();
    // $this->migrateCetaCoreThreeDown();
  }

  public function migrateDownAll(): void
  {
    // \HiveCalendar::migrateDown();
    // \HiveStream::migrateDown();
    \HivePosts::migrateDown();
    \HiveAlpha::migrateDown();
    $this->migrateDown();
  }
  public function migrateCetaCoreOneUp(): void
  {
    $migration = new Migrations\CetaCoreOneTables;
    $migration->up();
  }

  public function migrateCetaCoreOneDown(): void
  {
    $migration = new Migrations\CetaCoreOneTables;
    $migration->down();
  }
}
