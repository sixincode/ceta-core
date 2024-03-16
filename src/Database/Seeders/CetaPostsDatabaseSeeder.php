<?php

namespace Sixincode\CetaCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Provider\fr_FR\Text as TextFR;
use Sixincode\HiveHelpers\Traits\FieldsTrait;
use App\Models\User;
use Sixincode\HivePosts\Models\Category;
use Sixincode\HivePosts\Models\Tag;
use Sixincode\CetaCore\Models\Publication as Post;
use Sixincode\CetaCore\Models\Model;
use Illuminate\Support\Str;
/**
 * @see \Sixincode\CetaCore\CetaCore
 */
class CetaPostsDatabaseSeeder extends Seeder
{
  use FieldsTrait;

  public function run()
  {
    $adminuser = User::whereEmail('admin@admin.com')->first();
    foreach (config('ceta-core-posts') as  $post) {

      $publication = Post::create([
        'name'         => $post['title'],
        'description'  => $post['description'],
        'reference'    => $post['reference'] ?? "",
        'code'         => $post['code'] ?? Str::snake($post['title']),
        'user_global'  => $adminuser->global,
      ]);


      if(array_key_exists('image',$post))
      {
        $publication->image = $post['image'];
      }
      $publication->save();

    }

  }
}
