<x-hive-display-section component='boxedXSection' class='py-8 sm:py-16'>
  <h1 class="tracking-tight mt-6 text-center">
    <span class="block text-black font-extrabold text-4xl lg:text-5xl">{{__('ceta-core::core.bnftC')}}</span>
  </h1>
  <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:sm:grid-cols-3 mt-6">
    @foreach($publications as $publication)
    <div class="group relative block bg-black rounded">
      <img
        alt="Developer"
        src="{{asset('/vendor/ceta-core/img/landing/').'/'.$publication->image}}"
        class="rounded absolute inset-0 h-full w-full object-cover opacity-40 transition-opacity group-hover:opacity-60"
      />
      <div class="relative p-4 sm:p-6 lg:p-8">
        <div class="grid gap-6 text-center text-white">
            <p class="text-white">
            {{$publication->description}}
            </p>
            <p class="text-xl font-bold sm:text-2xl">{{$publication->name}}</p>

        </div>
      </div>
    </div>
    @endforeach

  </div>
</x-hive-display-section>
