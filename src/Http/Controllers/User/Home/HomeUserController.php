<?php

namespace Sixincode\CetaCore\Http\Controllers\User\Home;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function userHome()
    {
      return view('ceta-core::user.home.userHome');
    }
}
