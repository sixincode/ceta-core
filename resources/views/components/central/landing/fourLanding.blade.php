<x-hive-display-section component='boxedXSection' class='py-8 sm:py-16'>
  <div
    class="rounded-lg overflow-hidden bg-[url({{asset('/vendor/ceta-core/img/landing/tcd_flag.jpg')}})] bg-cover bg-top bg-no-repeat"
  >
    <div class="bg-black/60 p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="sm:text-left rtl:sm:text-right">
        <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">
          {{__('ceta-core::core.mbshp')}}
        </h2>

        <p
          class="max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed"
        >
        {{__('ceta-core::core.mbshpTx')}}
        </p>

        <div class="mt-4 sm:mt-8">
          <x-hive-display-button-array tag="a" class="pl-0 font-semibold leading-6"  textSize="regular" color="red">
            {{__('ceta-core::core.joinUsT')}}
          </x-hive-display-button-array>

        </div>
      </div>
    </div>
  </div>

</x-hive-display-section>
