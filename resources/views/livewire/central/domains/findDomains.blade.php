<x-hive-display-section source='sections' component='boxedSection'>
  <x-six-core-domain-search
   width='full'
   />
</x-hive-display-section>

 <x-hive-display-tabs naming='activeTab' :tabs='["results","history","bookmarks"]' :icons='["search","history","bookmark"]' component='lightNeon' classButton='uppercase'>
    <x-slot name="tabsContent">
      <x-hive-display-section source='sections' component='boxedSection'>
         <div x-cloak x-show="activeTab === 'results'">
           <x-six-core-central-domains-check-search-results :data='$data'/>
         </div>
         <div x-cloak x-show="activeTab === 'history'">
           <x-six-core-central-domains-check-search-history />
         </div>
         <div x-cloak x-show="activeTab === 'bookmarks'">
           <x-six-core-central-domains-check-search-bookmarks />
         </div>
      </x-hive-display-section>
    </x-slot>
</x-hive-display-tabs>
