<?php

// config for Sixincode/SixCore
return [
  'name' => 'SixCore',
    'identification'     => 'six-core',
    'models'             => [
      'domain'                      => Sixincode\SixCore\Models\Domain::class,
      'email'                       => Sixincode\SixCore\Models\Email::class,
      'hosting'                     => Sixincode\SixCore\Models\Hosting::class,
      'server'                      => Sixincode\SixCore\Models\Server::class,
      'service'                     => Sixincode\SixCore\Models\Service::class,
      'tld'                         => Sixincode\SixCore\Models\Tld::class,
     ],
    'table_names'        => [
      'domains'                     => 'domains',
      'emails'                      => 'emails',
      'hostings'                    => 'hostings',
      'servers'                     => 'servers',
      'services'                    => 'services',
      'tlds'                        => 'tlds',
     ],
    'column_names'       => [
      'domain_identifiant'          => 'domain_id',
      'service_identifiant'         => 'service_id',
      'tld_identifiant'             => 'tld_id',
     ],

    'defaultViews'       => [

      'searchDomainSource'        => 'domains',
      'searchDomainComponent'     => 'defaultSearchDomain',
    ],

    'defaultViewsBase'        => 'six-core::components',

];
