<div class="mx-auto grid max-w-7xl grid-cols-1 gap-6 gap-4 p-4 md:grid-cols-12 md:gap-8 sm:p-8">
  <div class="md:col-span-9 grid grid-cols-2 gap-4 md:gap-8">
    <div class="grid gap-4">
      <div class="flex flex-col gap-4">
     <x-hive-display-link
       title='{{__("Professional Email")}}'
       url='{{route("central.marketing.emails")}}'
       base='six-core::components'
       component='goList'
       icon='email'
       iconWidth='1.5'/>

     <x-hive-display-link
       title='{{__("Referrals")}}'
       url='{{route("central.marketing.referrals")}}'
       base='six-core::components'
       component='goList'
       icon='referral'
       iconWidth='1.5'/>
     </div>
   </div>
   <div class="flex flex-col gap-4">
     <x-hive-display-link
       title='{{__("SEO")}}'
       url='{{route("central.marketing.seo")}}'
       base='six-core::components'
       component='goList'
       icon='seo'
       iconWidth='1.5'/>

     <x-hive-display-link
       title='{{__("Analytics")}}'
       url='{{route("central.marketing.analytics")}}'
       base='six-core::components'
       component='goList'
       icon='analytics'
       iconWidth='1.5'/>

     </div>
   </div>
   <div class="md:col-span-3">
     <div class="bg-gray-200 rounded-xl min-h-40 h-full w-full">

     </div>
   </div>
</div>
