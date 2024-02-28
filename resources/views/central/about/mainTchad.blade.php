<x-hive-display-layout>
  <x-hive-display-section component='boxedSection' class="my-12 sm:my-16">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{$post->name}}</h2>
      <div class="mt-6">

      </div>
    </div>

    <p class="mt-12 sm:mt-16 text-gray-700">
      {!!$post->description!!}
    </p>

  </x-hive-display-section>
</x-hive-display-layout>
