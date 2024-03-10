<?php

namespace Sixincode\SixCore;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\SixCore\Commands\SixCoreCommand;
use Illuminate\Database\Schema\Blueprint;
use Sixincode\SixCore\Traits\Database as DatabaseTraits;

class SixCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/sixincode/hive-template
         */
        $package
            ->name('six-core')
            ->hasConfigFile(['six-core','six-core-middlewares'])
            ->hasViews()
            ->hasAssets()
            ->hasTranslations()
            ->hasBladeComponents()
            ->hasLayouts()
            ->hasRoutes(['web','user','api','admin'])
            ->hasMigration('create_six-core_table')
            ->runsMigrations()
            ->hasCommand(SixCoreCommand::class);

            $this->registerSixCoreDatabaseMethods();
    }

    private function registerSixCoreDatabaseMethods(): void
    {
      Blueprint::macro('addTldsFields', function (Blueprint $table, $properties = []) {
        DatabaseTraits\SixCoreDatabaseDefinitions::addTldsFields($table, $properties);
      });

      Blueprint::macro('addHostingsFields', function (Blueprint $table, $properties = []) {
        DatabaseTraits\SixCoreDatabaseDefinitions::addHostingsFields($table, $properties);
      });

      Blueprint::macro('addServersFields', function (Blueprint $table, $properties = []) {
        DatabaseTraits\SixCoreDatabaseDefinitions::addServersFields($table, $properties);
      });

      Blueprint::macro('addEmailsFields', function (Blueprint $table, $properties = []) {
        DatabaseTraits\SixCoreDatabaseDefinitions::addEmailsFields($table, $properties);
      });

      Blueprint::macro('addDomainsFields', function (Blueprint $table, $properties = []) {
        DatabaseTraits\SixCoreDatabaseDefinitions::addDomainsFields($table, $properties);
      });

      Blueprint::macro('addServicesFields', function (Blueprint $table, $properties = []) {
        DatabaseTraits\SixCoreDatabaseDefinitions::addServicesFields($table, $properties);
      });
    }
}
