@props(['current','active' => true])

@php
$classes = ($current ?? false)
            ? 'text-white bg-black hover:text-gray-100 inline-flex items-center rounded-lg py-1.5 px-3 group text-lg leading-5 font-semibold'
            : 'text-slate-500 hover:bg-gray-100/80 hover:text-gray-800 active:bg-gray-100 inline-flex items-center rounded-lg py-1.5 px-3 group text-lg leading-5 font-semibold';
$iconClasses = ($current ?? false)
            ? ''
            : '';
@endphp
<div class="inline-flex">
  <a href="{{$url}}" {{ $attributes->merge(['class' => $classes.' space-x-2']) }}>
    <span class="{{$iconClasses}}">
     <x-hive-form-icon
      path='{{$icon}}'
      width='6'
      height='6'
      class=' '
      />
    </span>
    <span>
      {{$title}}
    </span>
  </a>
</div>
