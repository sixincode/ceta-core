<?php

namespace Sixincode\SixCore\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\sortOrderTrait;
use Sixincode\HiveHelpers\Traits\HasSlugTrait;
use Sixincode\HivePosts\Traits\HasCategories;
use Sixincode\HivePosts\Traits\HasTags;
use Illuminate\Support\Str;

class Tld extends HiveModel
{
  use IsActiveTrait;
  use IsFeaturedTrait;
  use IsPrivateTrait;
  use sortOrderTrait;
  use HasSlugTrait;
  use HasCategories;
  use HasTags;

  protected $with = ['categories', 'tags'];

  public function __construct()
  {
    parent::__construct();

    $this->casts['name'] = 'array';
    $this->casts['description'] = 'array';

    $this->filterable[] = 'id';
    $this->filterable[] = 'name';
    $this->filterable[] = 'price';
    $this->filterable[] = 'level';

    $this->orderable[] = 'id';
    $this->orderable[] = 'name';
    $this->orderable[] = 'price';
    $this->orderable[] = 'level';

    $this->fillable[] = 'price';
    $this->fillable[] = 'level';
  }

  public $translatable = [];
  public $filterable = [];
  public $orderable = [];

  public function getTable()
  {
    return config('hive-posts.table_names.posts');
  }

  public static function slugOriginElement()
  {
    return 'name';
  }

  public function getRouteKeyName()
  {
      return 'slug';
  }

  public function getDetailsArray()
  {
    return [
      "name"         => $this->name,
      "description"  => $this->description,
      "body"         => $this->content,
      "icon"         => "tld",
      "price"        => $this->views,
      "level"        => $this->level,
    ];
  }

}
