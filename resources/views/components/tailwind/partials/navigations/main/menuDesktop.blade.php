
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
<div class="relative justify-between flex">
  <div class="absolute inset-y-0 left-0 flex items-center lg:hidden">
    <!-- Mobile menu button -->
    <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <!--
        Icon when menu is closed.

        Menu open: "hidden", Menu closed: "block"
      -->
      <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
      <!--
        Icon when menu is open.

        Menu open: "block", Menu closed: "hidden"
      -->
      <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  <div class="flex flex-1 items-center justify-center lg:items-stretch lg:justify-start">
    <div class="menuSlogan flex flex-shrink-0 items-center">
      <a href="/">
        <span class="sr-only">{{env('APP_NAME', '6ix Innovation')}}</span>
        <x-hive-form-icon
         path='6ixin'
         width='10'
         height='10'
         class='block'
         />
      </a>
    </div>
    <div class="hidden sm:ml-6 lg:flex lg:space-x-3 sm:py-2">

    <x-hive-display-mega-menu class="absolute" width="full">
        <x-slot name="trigger">
          <x-hive-display-link
            title='{{__("Domains")}}'
            url='#'
            current='{{request()->routeIs( "central.domains.*")}}'
            base='six-core::components'
            component='mainNavPill'
            icon='domain'
            iconWidth='1.5'/>
        </x-slot>
        <x-slot name="content">
          <!-- Domain menu section -->
          <x-hive-display-link
            base='six-core::components'
            source='partials.navigations'
            component='main.sectionDomain' />
        </x-slot>
     </x-hive-display-mega-menu>

     <x-hive-display-mega-menu class="absolute" width="full">
         <x-slot name="trigger">
           <x-hive-display-link
             title='{{__("Websites")}} & {{__("Hostings")}}'
             url='#'
             current='{{request()->routeIs( "central.hostings.*")}}'
             base='six-core::components'
             component='mainNavPill'
             icon='hosting'
             iconWidth='1.5'/>
         </x-slot>
         <x-slot name="content">
           <!-- Domain menu section -->
           <x-hive-display-link
             base='six-core::components'
             source='partials.navigations'
             component='main.sectionWebHosting' />
         </x-slot>
      </x-hive-display-mega-menu>

      <x-hive-display-mega-menu class="absolute" width="full">
          <x-slot name="trigger">
            <x-hive-display-link
              title='{{__("Marketing")}}'
              url='#'
              current='{{request()->routeIs( "central.marketing.*")}}'
              base='six-core::components'
              component='mainNavPill'
              icon='marketing'
              iconWidth='1.5'/>
          </x-slot>
          <x-slot name="content">
            <!-- Domain menu section -->
            <x-hive-display-link
              base='six-core::components'
              source='partials.navigations'
              component='main.sectionMarketing' />
          </x-slot>
      </x-hive-display-mega-menu>

      <x-hive-display-link
        title='{{__("Consulting")}}'
        url='#'
        base='six-core::components'
        component='mainNavPill'
        icon='job'
        iconWidth='1.5'/>

    </div>
  </div>
  <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
    <!-- Profile dropdown -->
    <div class="relative ml-3">
      <x-hive-display-dropdown>
        <x-slot name="trigger">
        <button type="button" class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
          <span class="sr-only">Open user menu</span>
          <span class="h-8 w-8 bg-slate-300 rounded-full"></span>
         </button>
        </x-slot>
        <x-slot name="content">
       <div class="">
         redefdfdf
       </div>
      </x-slot>
    </x-hive-display-dropdown>

    </div>
  </div>
</div>
</div>
