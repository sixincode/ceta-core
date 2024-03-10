@props(['current','active' => true, 'description'])

@php
$classes =  'text-slate-600 hover:text-blue-600 inline-flex items-center rounded-lg px-1.5 py-1.5 group';
$iconClasses = '';
@endphp

<!-- <div class="inline-flex">
  <a href="{{$url}}" {{ $attributes->merge(['class' => $classes.' space-x-2 group']) }}>
    <span class="{{$iconClasses}}">
     <x-hive-form-icon
      path='{{$icon}}'
      width='4'
      height='4'
      class=' '
      />
    </span>
    <span>
      {{$title}}
    </span>
  </a>
</div> -->

<div class="inline-flex items-stretch gap-4">
  <a href="{{$url}}" {{ $attributes->merge(['class' => $classes.' space-x-2 group']) }}>

    <span class="{{$iconClasses}}">
     <x-hive-form-icon
      path='{{$icon}}'
      width='8'
      height='8'
      class=' '
      />
    </span>

  <div>
    <h3 class="font-semibold">{{$title}}</h3>

    <p class="text-sm text-gray-500">
      {{$description ?? ''}}
    </p>
  </div>
 </a>
</div>
