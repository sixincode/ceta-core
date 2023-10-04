<?php

namespace Sixincode\CetaCore;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\CetaCore\Commands\CetaCoreCommand;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Sixincode\CetaCore\Traits\Database as DatabaseTraits;
use Illuminate\Database\Schema\Blueprint;

class CetaCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/sixincode/hive-template
         */
        $package
            ->name('ceta-core')
            ->hasConfigFile(['ceta-core','ceta-core-components','ceta-core-layouts','ceta-core-middlewares'])
            ->hasViews()
            ->hasAssets()
            ->hasTranslations()
            ->hasBladeComponents()
            // ->hasLayouts()
            // ->hasIcons()
            ->hasRoutes(['web','api','admin','user'])
            ->hasMigration('create_ceta-core_table')
            // ->runsMigrations()
            ->hasCommand(CetaCoreCommand::class);

            // $this->registerceta-coreDatabaseMethods();
    }

    // private function registerceta-coreDatabaseMethods(): void
    // {
    //   Blueprint::macro('addCetaCoreFields', function (Blueprint $table, $properties = []) {
    //     DatabaseTraits\CetaCoreDatabaseDefinitions::addCetaCoreFields($table, $properties);
    //   });
    // }
}
