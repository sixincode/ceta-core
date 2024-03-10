<x-hive-display-layout
  base='six-core::components'
  source='layouts'
  component='main.operationLayout'>
  <x-hive-display-section source='sections' component='dividedSection'>
  @if($data)
  <div class="flex justify-between">
    <div>
      <h1 class="mt-2 text-4xl px-4 text-center font-bold tracking-tight text-slate-800 sm:text-2xl">
      {{$data->domainName}}
      </h1>
    </div>
    <div class="">
      <p>
        refresh
      </p>
    </div>
  </div>

    <x-hive-display-table title='{{_("Domain Information")}}'>
      <x-hive-display-table-item title="{{_('Domain:')}}">
        {{$data->domainName}}
      </x-hive-display-table-item>
      <x-hive-display-table-item title="{{_('Registrar:')}}">
        {{$data->registrar}}
      </x-hive-display-table-item>
      <x-hive-display-table-item title="{{_('Registered on:')}}">
        {{gmdate('l jS F Y h:i A', $data->creationDate)}}
      </x-hive-display-table-item>
      <x-hive-display-table-item title="{{_('Expires on:')}}">
        {{gmdate('l jS F Y h:i A', $data->expirationDate)}}
      </x-hive-display-table-item>
      <x-hive-display-table-item title="{{_('Updated on:')}}">
        {{gmdate('l jS F Y h:i A', $data->updatedDate)}}
      </x-hive-display-table-item>
      <x-hive-display-table-item title="{{_('Status:')}}">
        @foreach($data->states as $state)
          <p>{{$state}}</p>
        @endforeach
      </x-hive-display-table-item>
      <x-hive-display-table-item title="{{_('Name Servers:')}}">
        @foreach($data->nameServers as $server)
          <p>{{$server}}</p>
        @endforeach
      </x-hive-display-table-item>
   </x-hive-display-table>

  <x-hive-display-card component='pollen' class='mt-4'>
    <div class="overflow-hidden p-4 py-2 rounded-t-lg bg-slate-100">
      <p class="font-semibold leading-6 text-gray-900">
        Raw Data
      </p>
    </div>
    <div class="rounded-b-lg p-4 bg-slate-50">
      {!! nl2br($data->text)!!}
    </div>
  </x-hive-display-card>

  @endif

</x-hive-display-section>
</x-hive-display-layout>
