@props([
    // title of the card
    'title' => '',
    // should the card be displayed with a shadow
    'has_shadow' => 'true',
    // for backward compatibility with Laravel 8
    'hasShadow' => 'true',
    // reduce padding within the card
    'reduce_padding' => 'false',
    // for backward compatibility with Laravel 8
    'reducePadding' => 'false',
    // content to display as card header
    'header' => '',
    // content to display as card footer
    'footer' => '',
    // additional css
    'class' => '',
])
@php
    // reset cetaCores for Laravel 8 support
    $has_shadow = $hasShadow;
    $reduce_padding = $reducePadding;
@endphp
<footer class="bottom-0 w-full bg-black">
    <x-hive-display-section component='boxedXSection' class='w-full py-6'>
      <div class=" text-gray-500 sm:flex sm:items-center sm:justify-between">
      <div class="flex justify-center sm:justify-start text-sm">
        <p>CAEC | CETA <span class="text-xs"><a href="https://www.6ixin.com">by 6ixin</a></span></p>
      </div>

      <p class="mt-4 text-center text-xs lg:mt-0 lg:text-right">
        Copyright &copy; {{date("Y")}}. All rights reserved.
      </p>
    </div>

    </x-hive-display-section>
</footer>
