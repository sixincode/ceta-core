@props(['current','active' => true, 'class'=>'', 'route'=>  route("central.domains.check"), 'width' => 'xl'])

@php
$buttonClass     = ' p-1.5 text-white flex items-center gap-2';
$iconClasses = '';
@endphp

<div class="w-full max-w-{{$width}} mx-auto lg:mx-0 {{$class}}">
  <div class="text-center lg:text-left">
    {{$slot}}
  </div>
 <div class="relative">
  <form name="domain_search_form"  method="post" action="{{$route}}">
  @csrf
  <label for="domain_search" class="sr-only"> {{__('Search Domain')}} </label>

  <x-hive-form-input
  name="domain_search"
  placeholder="Find a domain name"
  class="pr-6 p-2 bg-gray-50/80 rounded-sm"
  />
  <span class="absolute inset-y-0 end-0 grid px-2 place-content-center">
    <button
      type="submit"
      class="{{$buttonClass}}"
    >
    <x-hive-form-icon
     path='search'
     width='4'
     height='4'
     class='text-blue-200'
     />
    <span class="text-md font-semibold"> </span>
    </button>
  </span>
 </div>
</div>
