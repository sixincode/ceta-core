<div class="mx-auto grid md:grid-cols-2 max-w-7xl gap-4 p-4  sm:p-2">
    <div class="grid gap-2">

      <x-hive-display-link
        title='{{__("Website Builder")}}'
        url='{{route("central.hostings.webBuilder")}}'
        base='six-core::components'
        component='simpleList'
        icon='website'
        description='{{__("Bring your domain to the best!")}}'/>


     <x-hive-display-link
       title='{{__("Professional Email")}}'
       url='{{route("central.marketing.emails")}}'
       base='six-core::components'
       component='simpleList'
       icon='email'
       description='{{__("Bring your domain to the best!")}}'/>


       <x-hive-display-link
        title='{{__("SSL Certificates")}}'
        url='{{route("central.hostings.ssl")}}'
        base='six-core::components'
        component='simpleList'
        icon='ssl'
        description='{{__("Bring your domain to the best!")}}'/>

      </div>

   <div class="grid gap-2">
     <x-hive-display-link
       title='{{__("SEO")}}'
       url='{{route("central.marketing.seo")}}'
       base='six-core::components'
       component='simpleList'
       icon='seo'
       description='{{__("optimize your platform for search engine")}}'/>

     <x-hive-display-link
       title='{{__("Analytics")}}'
       url='{{route("central.marketing.analytics")}}'
       base='six-core::components'
       component='simpleList'
       icon='analytics'
       description='{{__("Bring your domain to the best!")}}'/>

       <x-hive-display-link
         title='{{__("Referrals")}}'
         url='{{route("central.marketing.referrals")}}'
         base='six-core::components'
         component='simpleList'
         icon='referral'
         description='{{__("Bring your domain to the best!")}}'/>
     </div>

</div>
