@props(['current','active' => true, 'class'=>'', 'route'=>  route("central.domains.check"), 'width' => 'xl'])

@php
$buttonClass     = 'rounded-full p-1.5 px-3.5 text-white flex items-center gap-2 bg-[#a1a11fe5] hover:bg-[#a1a11f]';
$iconClasses = '';
@endphp

<div class="w-full max-w-{{$width}} mx-auto lg:mx-0 {{$class}}">
  <div class="text-center lg:text-left">
    {{$slot}}
  </div>
 <div class="relative text-lg mt-6">
  <form name="domain_search_form"  method="post" action="{{$route}}">
  @csrf
  <label for="domain_search" class="sr-only"> {{__('Search Domain')}} </label>
  <div class="absolute inset-y-0 left-5 py-3 flex items-center pointer-events-none">
   www.
  </div>
  <x-hive-form-input
  name="domain_search"
  rounded="full"
  text_size="lg"
  placeholder="example.com"
  class="pr-24 pl-16 py-3 rounded-full focus:border-[#a1a11f]"
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
     class=' '
     />
    <span class="text-md font-semibold">{{__('Search Domain')}}</span>
    </button>
  </span>
 </div>
</div>
