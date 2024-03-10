<?php

namespace Sixincode\SixCore\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/**
* @see \Sixincode\SixCore\SixCoreTables
*/
class SixCoreTables extends Migration
{
 public function up()
 {
   $tableNames  = config('six-core.table_names');
   $columnNames = config('six-core.column_names');

   if (empty($tableNames)) {
     throw new \Exception('Error: config/six-core.php not loaded. Run [php artisan config:clear] and try again.');
   }
   if (empty($columnNames)) {
     throw new \Exception('Error: config/six-core.php not loaded. Run [php artisan config:clear] and try again.');
   }

   if(!Schema::hasTable($tableNames['tlds'])) {
     Schema::create('tlds', function (Blueprint $table) {
         $table->addTldsFields($table);
     });
   }

   if(!Schema::hasTable($tableNames['hostings'])) {
     Schema::create('hostings', function (Blueprint $table) {
         $table->addHostingsFields($table);
     });
   }

   if(!Schema::hasTable($tableNames['servers'])) {
     Schema::create('servers', function (Blueprint $table) {
         $table->addServersFields($table);
     });
   }

   if(!Schema::hasTable($tableNames['emails'])) {
     Schema::create('emails', function (Blueprint $table) {
         $table->addEmailsFields($table);
     });
   }

   if(!Schema::hasTable($tableNames['domains'])) {
     Schema::create('domains', function (Blueprint $table) {
         $table->addDomainsFields($table);
     });
   }

   if(!Schema::hasTable($tableNames['services'])) {
     Schema::create('services', function (Blueprint $table) {
         $table->addServicesFields($table);
     });
   }
 }

 public function down()
 {
   $tableNames  = config('six-core.table_names');
   $columnNames = config('six-core.column_names');

   if (empty($tableNames)) {
     throw new \Exception('Error: config/six-core.php not loaded. Run [php artisan config:clear] and try again.');
   }
   if (empty($columnNames)) {
     throw new \Exception('Error: config/six-core.php not loaded. Run [php artisan config:clear] and try again.');
   }

   Schema::dropIfExists($tableNames['services']);
   Schema::dropIfExists($tableNames['domains']);
   Schema::dropIfExists($tableNames['emails']);
   Schema::dropIfExists($tableNames['servers']);
   Schema::dropIfExists($tableNames['hostings']);
   Schema::dropIfExists($tableNames['tlds']);
 }
}
