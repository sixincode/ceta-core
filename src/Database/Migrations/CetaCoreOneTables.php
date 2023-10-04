<?php

namespace Sixincode\CetaCore\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Sixincode\CetaCore\Traits\Database\CetaCoreDatabaseDefinitions;

/**
 * @see \Sixincode\CetaCore\CetaCore
 */
class CetaCoreOneTables
{
  public static function up()
  {
      $tableNames  = config('ceta-core.table_names');
      $columnNames = config('ceta-core.column_names');

      if (empty($tableNames)) {
        throw new \Exception('Error: config/ceta-core.php not loaded. Run [php artisan config:clear] and try again.');
      }
      if (empty($columnNames)) {
        throw new \Exception('Error: config/ceta-core.php not loaded. Run [php artisan config:clear] and try again.');
      }

      // if(!Schema::hasTable($tableNames['ceta-core'])) {
      //   Schema::create($tableNames['ceta-core'], function (Blueprint $table) {
      //     $table->addCetaCoreFields($table);
      //   });
      // }

  }

  public static function down()
  {
      $tableNames  = config('ceta-core.table_names');
      $columnNames = config('ceta-core.column_names');

      if (empty($tableNames)) {
        throw new \Exception('Error: config/ceta-core.php not loaded. Run [php artisan config:clear] and try again.');
      }
      if (empty($columnNames)) {
        throw new \Exception('Error: config/ceta-core.php not loaded. Run [php artisan config:clear] and try again.');
      }

      // Schema::dropIfExists($tableNames['ceta-core']);
  }
}
