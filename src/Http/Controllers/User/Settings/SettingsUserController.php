<?php

namespace Sixincode\CetaCore\Http\Controllers\User\Settings;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class SettingsUserController extends Controller
{
    public function userSettings()
    {
      return view('ceta-core::user.settings.userSettings');
    }
}
