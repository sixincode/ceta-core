<x-hive-display-section source='sections' component='boxedSection'>
  <div class="w-full m-auto max-w-2xl py-6 lg:py-12">
    <h1 class="mt-2 text-4xl text-center font-bold tracking-tight text-slate-800 sm:text-6xl">
      {{__('Whois Lookup')}}
    </h1>
    <p class="mt-2 text-xl text-center leading-8 text-gray-600">
      Discover whos owns a domain
    </p>
    <x-six-core-domain-search
     width='full'
     class='mt-6'
     route='{{route("central.domains.whois.check")}}'
     />
  </div>
</x-hive-display-section>
