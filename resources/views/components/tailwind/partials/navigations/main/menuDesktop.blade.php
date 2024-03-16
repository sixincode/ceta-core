<x-hive-display-section component='boxedXSection' class='w-full'>
  <div class="flex justify-between">
    <div class="flex lg:px-0 items-center">
      <div class="flex-shrink-0 flex items-center">
        <a href="/">
          <img id="mainLogo" class="mx-auto w-12 p-2 rounded-full" src="{{asset('/vendor/ceta-core/img/main/caec_logo.png')}}" alt="logo"/>
        </a>
      </div>
      <div class="hidden lg:flex lg:space-x-4">

        <x-hive-display-mega-menu class="absolute" width="full">
            <x-slot name="trigger">

             <x-hive-display-link
               title='{{__("About")}}'
               url='#'
               current='{{request()->routeIs( "central.about.*")}}'
               base='ceta-core::components'
               component='simpleNav'
               iconWidth='1.5'/>
            </x-slot>
            <x-slot name="content">
              <!-- Domain menu section -->
              <x-hive-display-link
                base='ceta-core::components'
                source='partials.navigations'
                component='main.sectionAbout' />
            </x-slot>
         </x-hive-display-mega-menu>


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
        // header.classList.add("bg-black/90");
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
        // header.classList.remove("bg-black/90");
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
