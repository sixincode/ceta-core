@props(['current','active' => true])

@php
$classes = ($current ?? false)
            ? 'text-white bg-black hover:bg-black/90 hover:text-gray-100'
            : 'text-slate-500 hover:bg-gray-100/80 hover:text-gray-800 active:bg-gray-100';
$iconClasses = ($current ?? false)
            ? ''
            : '';
@endphp
<div class="inline-flex">
  <a href="{{$url}}" {{ $attributes->merge(['class' => $classes.' py-0.5 px-2 group rounded  text-md font-semibold space-x-1.5 inline-flex items-center']) }}>

    <span>
      {{$title}}
    </span>
  </a>
</div>
