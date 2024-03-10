@if(!empty($data))
<div class="">
  <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
    <x-six-core-central-domains-check-domain-status :data='$data' />
  </div>
</div>
@else
<x-hive-display-card component='pollen' class='p-4'>
  no data
</x-hive-display-card>
@endif
