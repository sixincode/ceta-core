@props(['current','active' => true])

@php
$classes =  'text-slate-700 hover:bg-slate-100/80 hover:text-slate-800 inline-flex items-center rounded-lg px-1.5 py-1.5 group leading-5 font-semibold w-full';
$iconClasses = 'text-slate-400 group-hover:text-slate-800 bg-slate-100 group-hover:bg-none rounded-xl';
@endphp

<div class="inline-flex">
  <a href="{{$url}}" {{ $attributes->merge(['class' => $classes.' space-x-2 group']) }}>
    <span class="{{$iconClasses}} p-2">
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
