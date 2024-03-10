<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function mainBlog()
    {
      return view('six-core::central.blog.mainBlog');
    }
}
