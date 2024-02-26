<?php

use Sixincode\CetaCore\Components as CetaCoreComponents;
use Sixincode\CetaCore\Http\Livewire   as CetaCoreLivewire;

// config for Sixincode/Middlewares Components
return [
  'user'            => ['web','auth:web','hive-stream-user'],
  'admin'           => ['web','auth:web','hive-stream-is_admin'],
  'central'         => ['web'],
  'api'             => ['api'],
];
