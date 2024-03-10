<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function mainLanding()
    {
      return view('six-core::central.landing.mainLanding');
    }

    public function testing()
    {
      $moduleIcons = [];
      foreach (\File::allFiles("../Livewire") as $iconName) {
        array_push($moduleIcons, basename($iconName) );
      }
      dd($moduleIcons);
      // return view('six-core::central.landing.mainLanding');
    }

    public function basePath(string $directory = null): string
    {
        if ($directory === null) {
            return $this->basePath;
        }

        return $this->basePath . DIRECTORY_SEPARATOR . ltrim($directory, DIRECTORY_SEPARATOR);
    }
}
