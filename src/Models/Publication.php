<?php

namespace Sixincode\CetaCore\Models;

use Sixincode\HivePosts\Models\Post;

class Publication extends Post
{
  public function __construct()
    {
      parent::__construct();
      $this->appends[] = 'image';
      $this->appends[] = 'url';
    }

    // public static function boot()
    // {
    //     parent::boot();
    //
    //     static::addGlobalScope(function ($query) {
    //       $query->where(
    //          config('ceta-core.reference_column'),
    //          config('ceta-core.reference_value.publication')
    //        );
    //     });
    // }

    public function getImageAttribute()
    {
      return $this->properties->image;
    }

    public function setImageAttribute($value)
    {
       $this->properties->image = $value;
    }

    public function getUrlAttribute()
    {
      return $this->properties->url;
    }

    public function setUrlAttribute($value)
    {
       $this->properties->url = $value;
    }
}
