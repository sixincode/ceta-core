<div class="">
  <x-hive-display-section class="bg-slate-50 py-12 md:py-24">
    <x-hive-display-section component='boxedSection'>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-8">
        <!-- Domains -->
        <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
          <x-slot name="image">
            <img src="{{asset('/vendor/six-core/img/dmn_buy_8.jpg')}}" class="rounded-full w-full max-w-48 mx-auto" alt="{{__('Domains')}}">
          </x-slot>
          <x-slot name="title">
            {{_('Buy a Domain')}}
          </x-slot>
             Claim your digital space seamlessly with our domain services.
         </x-hive-display-link >


         <!-- Websites -->
         <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
           <x-slot name="image">
             <img src="{{asset('/vendor/six-core/img/dmn_bld_8.jpg')}}" class="rounded-full w-full max-w-48 mx-auto" alt="{{__('Websites')}}">
           </x-slot>
           <x-slot name="title">
             {{_('Build your Website')}}
           </x-slot>
               Shape your online space effortlessly.
          </x-hive-display-link >



          <!-- Hostings -->
          <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
            <x-slot name="image">
              <img src="{{asset('/vendor/six-core/img/htg_srv_8.jpg')}}" class="rounded-full w-full max-w-48 mx-auto" alt="{{__('Hostings')}}">
            </x-slot>
            <x-slot name="title">
              {{_('Find the right Hosting')}}
            </x-slot>
               Find hosting solutions tailored to your needs, where reliability meets performance.
           </x-hive-display-link >



           <!-- Email -->
           <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
             <x-slot name="image">
               <img src="{{asset('/vendor/six-core/img/eml_bsn_8.jpg')}}" class="rounded-full w-full max-w-48 mx-auto" alt="{{__('Email')}}">
             </x-slot>
             <x-slot name="title">
               {{_('Create a professional Email')}}
             </x-slot>
                Find a domain for your web visibility.
            </x-hive-display-link >



            <!-- Marketing -->
            <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
              <x-slot name="image">
                <img src="{{asset('/vendor/six-core/img/mkt_adv_8.jpg')}}" class="rounded-full w-full max-w-48 mx-auto" alt="{{__('Marketing')}}">
              </x-slot>
              <x-slot name="title">
                {{_('Boost your business')}}
              </x-slot>
                Elevate your communication and claim your business online identity.
             </x-hive-display-link >



             <!-- Bundles -->
             <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
               <x-slot name="image">
                 <img src="{{asset('/vendor/six-core/img/bdl_all_8.jpg')}}" class="rounded-full w-full max-w-48 mx-auto" alt="{{__('Bundles')}}">
               </x-slot>
               <x-slot name="title">
                 {{_('Bundles')}}
               </x-slot>
                  Packed services, seamlessly combining power, security, and convenience dedicated for your online presence.
              </x-hive-display-link >




      </div>

    </x-hive-display-section>
  </x-hive-display-section>
</div>
