<div class="">
  <x-hive-display-section class="bg-slate-50">
    <x-hive-display-section component='boxedSection'>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Domain -->
        <x-hive-display-card component="plex.bear">
          <x-slot name="image">
            <img src="{{asset('/six-core/img/domain0.jpg')}}" alt="{{__('Domain')}}">
          </x-slot>
          <x-slot name="title">
            {{_('Domain')}}
          </x-slot>
             {{_('Domain')}}
         </x-hive-display-card >

         <!-- Hosting -->
         <x-hive-display-card component="plex.bear">
           <x-slot name="image">
             <img src="{{asset('/six-core/img/hosting0.jpg')}}" alt="{{__('Domain')}}">
           </x-slot>
           <x-slot name="title">
             {{_('Hosting')}}
           </x-slot>
              {{_('Domain')}}
          </x-hive-display-card >

          <!-- Marketing -->
          <x-hive-display-card component="plex.bear">
            <x-slot name="image">
              <img src="{{asset('/six-core/img/marketing0.jpg')}}" alt="{{__('Domain')}}">
            </x-slot>
            <x-slot name="title">
              {{_('Marketing')}}
            </x-slot>
               {{_('Domain')}}
           </x-hive-display-card >

      </div>
    </x-hive-display-section>
  </x-hive-display-section>
</div>
