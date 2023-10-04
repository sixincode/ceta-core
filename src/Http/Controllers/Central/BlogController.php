<?php

namespace Sixincode\CetaCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function mainBlog()
    {
      return view('ceta-core::central.blog.mainBlog');
    }
}
