<?php

namespace Sixincode\SixCore\Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * @see \Sixincode\SixCore\SixCore
 */
 class SixCoreSeeder extends Seeder
 {
     /**
      * Seed the application's database.
      *
      * @return void
      */
     public function run()
     {
       $this->call([
         TldDatabaseSeeder::class,
         HostingDatabaseSeeder::class,
         ServerDatabaseSeeder::class,
       ]);
     }
 }
