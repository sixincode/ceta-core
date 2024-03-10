 <!-- <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
   <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
 </svg> -->
 <div class="mx-auto grid md:grid-cols-2 max-w-7xl gap-4 p-4  sm:p-2">
  <div class="grid gap-2">
    <x-six-core-domain-search
     class=''
     component='simpleSearchDomain'

     />

       <x-hive-display-link
         title='{{__("Transfer")}}'
         url='{{route("central.domains.transfer")}}'
         base='six-core::components'
         component='simpleList'
         icon='transfer'
         description='{{__("Bring your domain to the best!")}}'/>

         <x-hive-display-link
           title='{{__("Extensions")}}'
           url='{{route("central.domains.extensions")}}'
           base='six-core::components'
           component='simpleList'
           icon='tld'
           description='{{__("Our list of TLDs available.")}}'/>

       <x-hive-display-link
       title='{{__("WHOIS")}}'
       url='{{route("central.domains.whois")}}'
       base='six-core::components'
       component='simpleList'
       icon='domain_search'
       description='{{__("Find information on any domain name.")}}'/>

    </div>
    <div class="flex flex-col gap-2">


      <x-hive-display-link
        title='{{__("Online Store")}}'
        url='{{route("central.hostings.onlineStore")}}'
        base='six-core::components'
        component='goList'
        icon='store'
        iconWidth='1.5'/>




     <x-hive-display-link
       title='{{__("Web Applications")}}'
       url='{{route("central.hostings.apps")}}'
       base='six-core::components'
       component='goList'
       icon='webApp'
       iconWidth='1.5'/>

    </div>

</div>
