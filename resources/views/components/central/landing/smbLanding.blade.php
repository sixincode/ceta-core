<div class="bg-black">
    <x-hive-display-section component='boxedSection'>
      <section>
      <div class="py-8 lg:py-16 ">
        <x-hive-display-card component='pollen' class='p-4 lg:py-12 bg-opacity-95'>
          <div class="">
            <h2 class="text-2xl text-center my-2 font-bold sm:text-3xl">
               HOW WE CAN HELP YOU
            </h2>
            <x-hive-display-tabs :tabs='["small_business","organisation"]' :icons='[]' component='bigIc' class='mt-4' >
              <x-slot name="tabsContent">
                <div x-cloak x-show="activeTab === 'small_business'">
                  <div class="grid md:grid-cols-12 gap-4 mt-6">

                    <div class="md:col-span-7 grid grid-cols-1 gap-4">
                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='eCommerce Platform'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Your online store with a design suited to your brand and detailed analytics to leverage your performance.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Customer relationship management softwares'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Sell subscriptions, bookings, or memberships, with our developer-vetted extensions.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Advertisement and Marketing Channels'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Expand your audience across marketing and social channels with tips to help you succeed.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Search Engine Optimization (SEO)'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Rise to the top of search results by leveraging our SEO tools.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Interactive catalogue and menu'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Dynamicaly showcase physical and digital goods, product variations, custom configurations, instant downloads, and affiliate items.</p>
                      </x-hive-display-card>
                     </div>

                     <div class="md:col-span-5">
                       <div class="items-center justify-center flex">
                         <img
                           alt="eCommerce"
                           src="{{asset('/vendor/six-core/img/sm_shop_12.jpg')}}"
                           class="rounded-lg"
                         />
                       </div>
                     </div>
                   </div>

                </div>
                <div x-cloak x-show="activeTab === 'organisation'">
                  <div class="grid md:grid-cols-12 gap-4 mt-6">
                    <div class="md:col-span-5">
                      <div class="items-center justify-center flex">
                        <img
                          alt="eCommerce"
                          src="{{asset('/vendor/six-core/img/sm_org_12.jpg')}}"
                          class="rounded-lg"
                        />
                      </div>
                    </div>

                    <div class="md:col-span-7 grid grid-cols-1 gap-4">
                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Content management softwares'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Empower your business growth and content management efficiency with our CMS solutions.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Membership management softwares'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Manage authorizations and memberships, with our developer-vetted extensions.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Events management'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Easily create, host, and manage your organization’s events, delighting attendees with tailored made applications.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Dashboards & Advanced Reporting'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Quickly gain visibility to member growth, retention rates, engagement scores, and more, so you can make data-driven decisions to move your organization forward.</p>
                      </x-hive-display-card>

                      <x-hive-display-card component='plex.pill' class='p-4 items-center' title='Search Engine Optimization (SEO)'>
                        <x-slot name="image">

                        </x-slot>
                        <p class="text-sm text-gray-500">Rise to the top of search results by leveraging our SEO tools.</p>
                      </x-hive-display-card>


                     </div>

                   </div>
                 </div>

              </x-slot>
            </x-hive-display-tabs>
           </div>
        </x-hive-display-card>
      </div>
      </section>
  </x-hive-display-section>
</div>
