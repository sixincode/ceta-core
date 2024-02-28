<x-hive-display-layout>
  <x-hive-display-section component='boxedSection' class="my-12 sm:my-16">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{!!$post->name!!}</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">
        {{__('ceta-core::core.agoaDef')}}
      </p>
    </div>

    <p class="mt-12 sm:mt-16 text-gray-700 text-xl">
      {!!$post->description!!}
    </p>

    <div class="mt-12 sm:mt-16 text-gray-700">
      <p>Source :</p>
      <ul class="text-gray-500 text-sm">
        <li>WorldBank</li>
        <li>Trade.gov</li>
        <li>Wikipedia</li>
      </ul>
    </div>
  </x-hive-display-section>
</x-hive-display-layout>
``
