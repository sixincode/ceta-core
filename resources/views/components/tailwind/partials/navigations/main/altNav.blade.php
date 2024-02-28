<nav id="mainMenu" x-data="{mobileMenu: false, toggle(){this.mobileMenu = !this.mobileMenu;}}"  class="fixed w-full z-30 top-0 text-white">
  <x-hive-display-section component='boxedXSection' class='w-full'>
    <div class="flex justify-between">
      <div class="flex lg:px-0 items-center">
        <!-- <div class="flex-shrink-0 flex items-center">
          <a href="/">
            <img id="mainLogo" class="mx-auto w-12 p-2 rounded-full" src="{{asset('/vendor/ceta-core/img/main/caec_logo.png')}}" alt="logo"/>
          </a>
        </div> -->
        <div class="hidden lg:flex lg:space-x-4">

          <x-hive-display-link
            title='{{__("About")}}'
            url='{{route("central.about")}}'
            text_color='text-gray-400 hover:text-gray-200'
            current='{{request()->routeIs( "central.about.*")}}'
            base='ceta-core::components'
            component='simpleNav'
            iconWidth='1.5'/>

          <x-hive-display-link
            title='{{__("Publications")}}'
            url='{{route("central.blog")}}'
            text_color='text-gray-400 hover:text-gray-200'
            current='{{request()->routeIs( "central.blog.*")}}'
            base='ceta-core::components'
            component='simpleNav'
            iconWidth='1.5'/>

          <x-hive-display-link
            title='{{__("Contact")}}'
            url='{{route("central.contact")}}'
            current='{{request()->routeIs( "central.contact.*")}}'
            base='ceta-core::components'
            component='simpleNav'
            text_color='text-gray-400 hover:text-gray-200'
            iconWidth='1.5'/>

        </div>
      </div>

      <div class="hidden lg:ml-4 lg:flex lg:items-center">
        <div class="flex justify-center space-x-6 items-center">
          <x-hive-translation-lang-switch />
          <!-- <div class="bg-white/40 hover:bg-white/80 rounded-md py-1 px-3 flex gap-1.5 text-gray-600 hover:text-gray-800 text-sm font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>
            <p>English</p>

          </div> -->
        </div>
      </div>

      <div class="lg:hidden">
      <button type="button" class="-my-2.5 inline-flex items-center justify-center rounded p-1.5 mt-1 text-gray-400 hover:bg-slate-50/40 hover:text-gray-600" @click="mobileMenu = true">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path x-show="!mobileMenu" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
          <path x-show="mobileMenu"  stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    </div>
  </x-hive-display-section>

  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" x-ref="dialog" x-show="mobileMenu" aria-modal="true">
       <div class="fixed inset-0 z-50"></div>
       <div class="fixed inset-y-0 right-0 z-50 w-full bg-white overflow-y-auto sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" @click.away="mobileMenu = false">
          <div class="flow-root">
            <div class="px-4 sm:px-6 lg:px-8">
             <button type="button" class="flex items-center justify-center rounded p-1.5 mt-1 ml-auto text-gray-400 hover:bg-slate-50/40 hover:text-gray-600" @click="mobileMenu = false">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path x-show="mobileMenu"  stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
             </button>
           </div>

           <div class="-my-6 divide-y divide-gray-500/10 px-6">
             <div class="space-y-2 py-6">
               <a href="{{route('central.blog')}}" class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-500 hover:text-slate-900 hover:bg-slate-50">
                 <x-hive-form-icon
                  path='post'
                  width='5'
                  height='6'
                  />
                   {{__('Publications')}}
               </a>
             </div>
             <div class="py-6">
               <a href="{{route('central.about')}}" class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-500 hover:text-slate-900 hover:bg-slate-50">
                 <x-hive-form-icon
                  path='info'
                  width='5'
                  height='6'
                  />
                   {{__('About')}}
               </a>
               <a href="{{route('central.contact')}}" class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 text-base font-semibold leading-7 text-slate-500 hover:text-slate-900 hover:bg-slate-50">
                 <x-hive-form-icon
                  path='contact'
                  width='5'
                  height='6'
                  />
                   {{__('Contact')}}
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
</nav>


<!-- ====== Navbar Section End -->
@push('scripts')

	<script>
		var scrollpos = window.scrollY;
    var header = document.getElementById("mainMenu");
    var mainLogo = document.getElementById("mainLogo");
		var navcontent = document.getElementById("nav-content");
		var navAccountBtn = document.getElementById("navAccountBtn");
		var brandname = document.getElementById("brandname");
		var sloganDisplay = document.querySelectorAll(".menuSlogan");

		document.addEventListener('scroll', function() {

			/*Apply classes for slide in bar*/
			scrollpos = window.scrollY;

			if (scrollpos > 60) {
        // header.classList.add("bg-black");
        header.classList.add("bg-black/90");
        header.classList.add("shadow");
        mainLogo.classList.add("p-3");
				navAccountBtn.classList.remove("bg-white");
				navAccountBtn.classList.add("bg-blue-600");
				navAccountBtn.classList.remove("text-blue-600");
				navAccountBtn.classList.add("text-white");
				//Use to switch menuSlogan colours
				for (var i = 0; i < sloganDisplay.length; i++) {
					sloganDisplay[i].classList.add("text-gray-800");
					sloganDisplay[i].classList.remove("text-gray-600");
				}
				header.classList.add("shadow-sm");
				navcontent.classList.remove("bg-gray-100");
				navcontent.classList.add("bg-white");
			} else {
        // header.classList.remove("bg-black");
        header.classList.remove("bg-black/90");
        header.classList.remove("shadow");
        mainLogo.classList.remove("p-3");
				navAccountBtn.classList.remove("bg-blue-600");
				navAccountBtn.classList.add("bg-white");
				navAccountBtn.classList.remove("text-white");
				navAccountBtn.classList.add("text-blue-600");
				//Use to switch menuSlogan colours
				for (var i = 0; i < sloganDisplay.length; i++) {
					sloganDisplay[i].classList.add("text-gray-600");
					sloganDisplay[i].classList.remove("text-gray-800");
				}

				header.classList.remove("shadow-sm");
				navcontent.classList.remove("bg-white");
				navcontent.classList.add("bg-gray-100");

			}

		});
	</script>
@endpush
