<?php

use Sixincode\CetaCore\Components as CetaCoreComponents;
use Sixincode\CetaCore\Http\Livewire   as CetaCoreLivewire;

// config for Sixincode/CetaCore Components
return [
    'blade' => [
      // 'component'   => CetaCoreComponents\Component::class,
      'central-landing-top'      => CetaCoreComponents\Central\Landing\TopLanding::class,
      'central-landing-two'      => CetaCoreComponents\Central\Landing\TwoLanding::class,
      'central-landing-three'    => CetaCoreComponents\Central\Landing\ThreeLanding::class,
      'central-landing-four'     => CetaCoreComponents\Central\Landing\FourLanding::class,
      'central-landing-five'     => CetaCoreComponents\Central\Landing\FiveLanding::class,

      'central-about-top'        => CetaCoreComponents\Central\About\TopAbout::class,
      'central-about-two'        => CetaCoreComponents\Central\About\TwoAbout::class,
      'central-about-three'      => CetaCoreComponents\Central\About\ThreeAbout::class,

      'central-blog-top'         => CetaCoreComponents\Central\Blog\TopBlog::class,
      'central-blog-two'         => CetaCoreComponents\Central\Blog\TwoBlog::class,
      'central-blog-three'       => CetaCoreComponents\Central\Blog\ThreeBlog::class,

      'central-contact-top'      => CetaCoreComponents\Central\Contact\TopContact::class,
      'central-contact-two'      => CetaCoreComponents\Central\Contact\TwoContact::class,
      'central-contact-three'    => CetaCoreComponents\Central\Contact\ThreeContact::class,


      // 'user-home-top'            => CetaCoreComponents\User\Home\TopHome::class,
      // 'user-home-two'            => CetaCoreComponents\User\Home\TwoHome::class,
      // 'user-home-three'          => CetaCoreComponents\User\Home\ThreeHome::class,
      //
      // 'user-settings-top'        => CetaCoreComponents\User\Settings\TopSettings::class,
      // 'user-settings-two'        => CetaCoreComponents\User\Settings\TwoSettings::class,
      // 'user-settings-three'      => CetaCoreComponents\User\Settings\ThreeSettings::class,

      // 'admin-panels-top'            => CetaCoreComponents\Admin\Panels\TopPanels::class,
      // 'admin-panels-two'            => CetaCoreComponents\Admin\Panels\TwoPanels::class,
      // 'admin-panels-three'          => CetaCoreComponents\Admin\Panels\ThreePanels::class,
      //
      // 'admin-controls-top'        => CetaCoreComponents\Admin\Controls\TopControls::class,
      // 'admin-controls-two'        => CetaCoreComponents\Admin\Controls\TwoControls::class,
      // 'admin-controls-three'      => CetaCoreComponents\Admin\Controls\ThreeControls::class,

    ],
    'livewire' => [
      // 'component'   => CetaCoreLivewire\Component::class,
      'central-landing-main'   => CetaCoreLivewire\Central\Landing\MainLanding::class,
      'central-about-main'     => CetaCoreLivewire\Central\About\MainAbout::class,
      'central-blog-main'      => CetaCoreLivewire\Central\Blog\MainBlog::class,
      'central-contact-main'   => CetaCoreLivewire\Central\Contact\MainContact::class,
      //
      // 'user-home-main'         => CetaCoreLivewire\User\Home\UserHome::class,
      // 'user-settings-main'     => CetaCoreLivewire\User\Settings\UserSettings::class,
      //
      // 'admin-panels-main'      => CetaCoreLivewire\Admin\Panels\AdminPanels::class,
      // 'admin-controls-main'    => CetaCoreLivewire\Admin\Controls\AdminControls::class,
    ],
    'prefix' => 'ceta-core',
];
