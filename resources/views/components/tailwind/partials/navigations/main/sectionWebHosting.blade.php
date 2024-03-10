<div class="mx-auto grid max-w-7xl grid-cols-1 gap-6 gap-4 p-4 md:grid-cols-12 md:gap-8 sm:p-8">
  <div class="md:col-span-9 grid grid-cols-3 gap-4 md:gap-8">
    <div class="grid gap-4">
      <div class="flex flex-col gap-4">
       <x-hive-display-link
         title='{{__("Website Builder")}}'
         url='{{route("central.hostings.webBuilder")}}'
         base='six-core::components'
         component='goList'
         icon='website'
         iconWidth='1.5'/>

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
   <div class="flex flex-col gap-4">
     <x-hive-display-link
       title='{{__("Web Hosting")}}'
       url='{{route("central.hostings.web")}}'
       base='six-core::components'
       component='goList'
       icon='hosting'
       iconWidth='1.5'/>

     <x-hive-display-link
       title='{{__("Virtual Private Servers")}} (VPS)'
       url='{{route("central.hostings.vps")}}'
       base='six-core::components'
       component='goList'
       icon='vps'
       iconWidth='1.5'/>

     <x-hive-display-link
       title='{{__("Wordpress Hosting")}}'
       url='{{route("central.hostings.wordpress")}}'
       base='six-core::components'
       component='goList'
       icon='wordpress'
       iconWidth='1.5'/>

     <x-hive-display-link
       title='{{__("All Hosting Options")}}'
       url='{{route("central.hostings.index")}}'
       base='six-core::components'
       component='goList'
       icon='arrow_r'
       plus='true'
       iconWidth='1.5'/>

     </div>

     <div class="flex flex-col gap-4">
       <x-hive-display-link
         title='{{__("SSL Certificates")}}'
         url='{{route("central.hostings.ssl")}}'
         base='six-core::components'
         component='goList'
         icon='ssl'
         iconWidth='1.5'/>

       <x-hive-display-link
         title='{{__("VPN")}}'
         url='{{route("central.hostings.vpn")}}'
         base='six-core::components'
         component='goList'
         icon='vpn'
         iconWidth='1.5'/>

       <x-hive-display-link
         title='{{__("Back Up and Recover")}}'
         url='{{route("central.hostings.backUp")}}'
         base='six-core::components'
         component='goList'
         icon='backUp'
         iconWidth='1.5'/>

       <x-hive-display-link
         title='{{__("All Security Options")}}'
         url='{{route("central.hostings.security")}}'
         base='six-core::components'
         component='goList'
         icon='arrow_r'
         plus='true'
         iconWidth='1.5'/>

       </div>

   </div>
   <div class="md:col-span-3">
     <div class="bg-gray-200 rounded-xl min-h-40 h-full w-full">

     </div>
   </div>
</div>
