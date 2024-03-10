<x-hive-display-section component='boxedSection'>
  <div class="grid lg:grid-cols-2 gap-4 py-8 lg:py-10">
    <div class="lg:col-span-6 py-3 lg:py-8">
      @if($data)
      <x-hive-display-table title='{{$data->domainName}}'>
        <x-hive-display-table-item title="{{_('Domain:')}}">
          {{$data->domainName}}
        </x-hive-display-table-item>
        <x-hive-display-table-item title="{{_('Registrar:')}}">
          {{$data->registrar}}
        </x-hive-display-table-item>
        <x-hive-display-table-item title="{{_('Expires on:')}}">
          {{$data->expirationDate}}
        </x-hive-display-table-item>
        <x-hive-display-table-item title="{{_('Status:')}}">
          @if(in_array('clienttransferprohibited',$data->states))
            <p class="font-semibold text-red-700">{{_('Locked')}}</p>
            <p>Please Go to your current registrar and unlock the domain to allow the transfer and continue.</p>
            <p class="text-slate-400">It may be referred to as "registrar lock", "registration lock", "transfer lock", "domain lock" or "lock"</p>
          @else
            <p class="font-semibold text-green-700">{{_('Domain is Unlocked')}}</p>
          @endif
        </x-hive-display-table-item>
      </x-hive-display-table>
      @endif
      <x-six-core-domain-search
       class='mt-6'
       route='{{route("central.domains.transfer.check")}}'
       />

    </div>
  </div>
</x-hive-display-section>
