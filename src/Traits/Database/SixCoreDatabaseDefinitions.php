<?php

namespace Sixincode\SixCore\Traits\Database;

use Illuminate\Database\Schema\Blueprint;
use Sixincode\HiveHelpers\Traits\FieldsTrait;

trait SixCoreDatabaseDefinitions
{
  use FieldsTrait;

  public static function addTldsFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('record');
    $table->boolean('nonRealTime')->default(false);
    $table->tinyInteger('minRegisterYears')->default(1);
    $table->tinyInteger('MaxRegisterYears')->default(10);
    $table->tinyInteger('minRenewYears')->default(1);
    $table->tinyInteger('maxRenewYears')->default(9);
    $table->integer('renewalMinDays')->default(0);
    $table->integer('renewalMaxDays')->default(4000);
    $table->tinyInteger('reactivateMaxDays')->default(0);
    $table->tinyInteger('minTransferYears')->default(1);
    $table->tinyInteger('maxTransferYears')->default(1);
    $table->boolean('isApiRegisterable')->default(true);
    $table->boolean('isApiRenewable')->default(true);
    $table->boolean('isApiTransferable')->default(false);
    $table->boolean('isEppRequired')->default(true);
    $table->boolean('isDisableModContact')->default(false);
    $table->boolean('isDisableWGAllot')->default(false);
    $table->boolean('isIncludeInExtendedSearchOnly')->default(false);
    $table->integer('sequenceNumber')->default(4930);
    $table->string('type')->default('GTLD');
    $table->string('subType')->nullable();
    $table->boolean('isSupportsIDN')->default(true);
    $table->string('category')->default('P');
    $table->boolean('supportsRegistrarLock')->default(true);
    $table->tinyInteger('addGracePeriodDays')->default(5);
    $table->boolean('whoisVerification')->default(false);
    $table->boolean('providerApiDelete')->default(true);
    $table->string('tldState')->nullable();
    $table->string('searchGroup')->nullable();
    $table->string('registry')->nullable();
    $table->integer('level');
    $table->isFeaturedField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

  public static function addHostingsFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('record');
    $table->isFeaturedField();
    $table->isDefaultField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

  public static function addServersFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('record');
    $table->isFeaturedField();
    $table->isDefaultField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

  public static function addEmailsFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('record');
    $table->isFeaturedField();
    $table->isDefaultField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

  public static function addDomainsFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('record');
    $table->morphToOwner();
    $table->isFeaturedField();
    $table->isDefaultField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

  public static function addServicesFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('record');
    $table->isFeaturedField();
    $table->isDefaultField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

}
