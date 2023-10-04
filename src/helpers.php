<?php
  // if (! function_exists('base_components')) {
  //     function base_components()
  //     {
  //       return 'ceta-core::components';
  //     }
  // }
  //
  // if (! function_exists('base_layouts')) {
  //     function base_layouts()
  //     {
  //       return 'ceta-core::components';
  //     }
  // }
  //
  // if (! function_exists('base_headers')) {
  //     function base_headers()
  //     {
  //       return 'ceta-core::components';
  //     }
  // }
  //
  // if (! function_exists('base_navigations')) {
  //     function base_navigations()
  //     {
  //       return 'ceta-core::components';
  //     }
  // }
  //
  // if (! function_exists('base_sidebars')) {
  //     function base_sidebars()
  //     {
  //       return 'ceta-core::components';
  //     }
  // }
  //
  // if (! function_exists('base_footers')) {
  //     function base_footers()
  //     {
  //         return 'ceta-core::components';
  //     }
  // }
  //
  if (! function_exists('have_translations')) {
      function have_translations()
      {
          return config('ceta-core.use_translations');
      }
  }

  if (! function_exists('lang_route')) {
      function lang_route()
      {
        return config('ceta-core.lang_route');
      }
  }

  if (! function_exists('locale_langs')) {
      function locale_langs()
      {
        return config('ceta-core.locale_langs');
      }
  }

  if (! function_exists('default_lang')) {
      function default_lang()
      {
        return config('ceta-core.default_lang');
      }
  }
