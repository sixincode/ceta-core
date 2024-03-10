<div class="mx-auto grid md:grid-cols-2  max-w-7xl grid-cols-1gap-4 p-4 sm:p-2">

   <div class="grid gap-2">
     <x-hive-display-link
       title='{{__("Shared Hosting")}}'
       url='{{route("central.hostings.web")}}'
       base='six-core::components'
       component='simpleList'
       icon='hosting'
       description='{{__(" ")}}'/>

       <x-hive-display-link
         title='{{__("Wordpress Hosting")}}'
         url='{{route("central.hostings.wordpress")}}'
         base='six-core::components'
         component='simpleList'
         icon='wordpress'
         description='{{__(" ")}}'/>

     <x-hive-display-link
       title='{{__("Virtual Private Servers")}} (VPS)'
       url='{{route("central.hostings.vps")}}'
       base='six-core::components'
       component='simpleList'
       icon='vps'
       description='{{__(" ")}}'/>

       <x-hive-display-link
         title='{{__("Dedicated Hosting")}}'
         url='{{route("central.hostings.vps")}}'
         base='six-core::components'
         component='simpleList'
         icon='vps'
         description='{{__(" ")}}'/>
     </div>

       <div class="grid gap-2">


       <x-hive-display-link
         title='{{__("VPN")}}'
         url='{{route("central.hostings.vpn")}}'
         base='six-core::components'
         component='simpleList'
         icon='vpn'
         description='{{__(" ")}}'/>

       <x-hive-display-link
         title='{{__("Back Up and Recover")}}'
         url='{{route("central.hostings.backUp")}}'
         base='six-core::components'
         component='simpleList'
         icon='backUp'
         description='{{__(" ")}}'/>

       <x-hive-display-link
         title='{{__("All Hosting Features")}}'
         url='{{route("central.hostings.security")}}'
         base='six-core::components'
         component='simpleList'
         icon='arrow_r'
         plus='true'
         description='{{__(" ")}}'/>

       </div>

</div>
