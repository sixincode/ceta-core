@if(($data['_Available'] === 'true') && ($data['_ErrorNo'] == 0) )
<x-hive-display-card component='pollen' class=''>
  <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-4 sm:px-3.5">
  <div class="flex items-center gap-x-4 gap-y-2">
    <p class="text-lg leading-6 text-gray-900">
      <strong class="font-semibold">{{$data['_Domain']}}</strong>
       is available !
    </p>
    <a href="#" class="flex-none rounded-full bg-green-700 px-3.5 py-1 text font-semibold text-white shadow-sm hover:bg-green-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
      Make It Yours <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
  <div class="flex flex-1 justify-end">
    <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
      <span class="sr-only">Bookmark</span>
      <x-hive-form-icon
       path='bookmark'
       width='5'
       height='5'
       class=''
       size='0.3%'
       />
    </button>
  </div>
</div>
<div class="px-4 py-4">
  <div class="min-w-0 flex-1 flex space-x-4 items-center">
    <h2 class="font-semibold text-gray-600 sm:truncate sm:tracking-tight">
      $6.00
    </h2>
    <p class="text-sm text-gray-500">
      Special 1st yr welcome offer
    </p>
  </div>
</div>
</x-hive-display-card>



<div class="mt-4">
  <h3 class="text-sm font-semibold leading-7 text-slate-400"> Include</h3>
  <x-hive-display-faq>
    <x-hive-display-faq-item title="{{__('Professional email address')}}" icon="email">
      This is a test
    </x-hive-display-faq-item>
    <x-hive-display-faq-item title="{{__('WHOIS Confidentiality')}}" icon="lock">
      Ceci est un test
    </x-hive-display-faq-item>
    <x-hive-display-faq-item title="{{__('SSL Encryption')}}" icon="ssl">
      bueno
    </x-hive-display-faq-item>
  </x-hive-display-faq>
</div>

@else
<x-hive-display-card component='pollen' class=''>
  <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-4 sm:px-3.5">
  <div class="flex items-center gap-x-4 gap-y-2">
    <p class="text-lg leading-6 text-gray-900">
      <strong class="font-semibold">{{$data['_Domain']}}</strong>
       is taken !
    </p>
    <a href="#" class="flex-none rounded-full bg-red-700 px-3.5 py-1 text font-semibold text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
      Make An Offer <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
  <div class="flex flex-1 justify-end">
    <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
      <span class="sr-only">Bookmark</span>
      <x-hive-form-icon
       path='bookmark'
       width='5'
       height='5'
       class=''
       size='0.3%'
       />
    </button>
  </div>
</div>

</x-hive-display-card>

<div class="grid grid-cols-1 md:grid-cols-1 gap-4">
  <x-six-core-central-domains-check-domain-alternatives />
 </div>

@endif
