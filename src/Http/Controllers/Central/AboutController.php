<?php

namespace Sixincode\CetaCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Sixincode\HivePosts\Models\Post;

class AboutController extends Controller
{
    public function mainAbout()
    {
      return view('ceta-core::central.about.mainAbout');
    }

    public function mainAgoa()
    {
      $post = Post::whereReference("about_agoa")->first();
      return view('ceta-core::central.about.mainAgoa',[
        'post' => $post,
      ]);
    }

    public function mainTchad()
    {
      $post = Post::whereReference('about_chad')->first();
      return view('ceta-core::central.about.mainTchad',[
        'post' => $post,
      ]);
    }
}
