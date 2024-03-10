@props([
'title' => '',
'description' => '',
'class' => '',
'footer' => ''
])
  <a href="#" class="p-4 group {{$class}} text-center bg-white shadow-sm hover:bg-white/70 hover:shadow border border-slate-100 rounded-lg">
    <div class="">
      {{ $image ?? '' }}
    </div>
    <div class="mt-3">
      <p class="text-lg font-semibold text-slate-700 group-hover:text-slate-900">{{$title ?? ''}}</p>
      <p class="text-gray-500 group-hover:text-gray-700">{{$slot}}</p>
    </div>
  </a>
