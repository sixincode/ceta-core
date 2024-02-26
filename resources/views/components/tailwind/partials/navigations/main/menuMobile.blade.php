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
                 {{__('Blog')}}
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
