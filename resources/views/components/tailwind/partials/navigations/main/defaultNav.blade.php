<nav id="mainMenu" x-data="{mobileMenu: false, toggle(){this.mobileMenu = !this.mobileMenu;}}"  class="fixed w-full z-30 bg-black/90 top-0 text-white">

  <!-- Desktop menu -->
<x-hive-display-link
  base='ceta-core::components'
  source='partials.navigations'
  component='main.menuDesktop' />

  <!-- Mobile menu -->
  <x-hive-display-link
    base='ceta-core::components'
    source='partials.navigations'
    component='main.menuMobile' />




</nav>


<!-- ====== Navbar Section End -->
