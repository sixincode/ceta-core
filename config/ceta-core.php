<?php

// config for Sixincode/CetaCore
return [
  'title'          => 'CETA | CAEC',
  'slogan'         => 'Chambre Economique Tchado-Americaine<br>
                       Chadian American Economic Chamber ',
  'appInMaintenance'  => false,
  'appIsComingSoon'   => false,

  // translations
  'use_translations'  => true,
  'default_lang'  => 'en',
  'lang_route'    => 'lang',
  'translations'  => ['en','fr'],
  'locale_langs'  => [
    'en'          => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB'],
    'fr'          => ['name' => 'French',  'script' => 'Latn', 'native' => 'Français', 'regional' => 'fr_FR'],
  ],
  'table_names'   => [
    'sectors'           => 'sectors',
  ],
  'column_names'   => [
    'id'           => 'id',
  ],
  'reference_column'      => config('hive-helpers.column_names.reference'),
  'reference_value'       => [
    'publication'                 => 'publication',

  ],
];
