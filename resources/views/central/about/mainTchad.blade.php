<x-hive-display-layout>
  <x-hive-display-section component='boxedSection'>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{$post->title}}</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">
        Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
      </p>
    </div>

    <p class="mt-12 sm:mt-16 text-gray-700">
      {{$post->description}}
    </p>
  </x-hive-display-section>
</x-hive-display-layout>
