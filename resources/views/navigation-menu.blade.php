<nav x-data="{ open: false }" class="bg-white py-3 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="ms-container">
        <div class="flex justify-between h-16">
            <div class="flex grow">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 md:-my-px md:ms-10 md:flex md:justify-between md:w-full">
                    
                    <div class="hidden lg:flex lg:gap-x-12 items-center">
                        <div x-data="{ open: false }" class="relative">
                          <button @click="open = !open" type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
                            Corporate
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                              <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                          </button>
                  
                          <!--
                            'Product' flyout menu, show/hide based on flyout menu state.
                  
                            Entering: "transition ease-out duration-200"
                              From: "opacity-0 translate-y-1"
                              To: "opacity-100 translate-y-0"
                            Leaving: "transition ease-in duration-150"
                              From: "opacity-100 translate-y-0"
                              To: "opacity-0 translate-y-1"
                          -->
                          <div x-show="open" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                            <div class="p-4">
                              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                   <img class="w-8 h-8" src="https://radgifts.in/storage/01J8AWKRJ1CXVNZNT1FWD38WZ1.jpg" alt="Festive Hamper">
                                </div>
                                <div class="flex-auto">
                                  <a href="/corporate-gifting/festive" class="block font-semibold text-gray-900">
                                    Festive
                                    <span class="absolute inset-0"></span>
                                  </a>
                                  <p class="mt-1 text-gray-600">Designed to delight and impress, featuring premium treats and artisanal goods.</p>
                                </div>
                              </div>
                              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                  <img class="w-8 h-8" src="https://radgifts.in/storage/01J8AWPKESQCV8PJM0D2J5VFPZ.jpg" alt="Eco-Friendly Hampers">
                                </div>
                                <div class="flex-auto">
                                  <a href="/corporate-gifting/eco-friendly" class="block font-semibold text-gray-900">
                                    Eco-Friendly
                                    <span class="absolute inset-0"></span>
                                  </a>
                                  <p class="mt-1 text-gray-600">Caters to eco-conscious consumers who care for environmental sustainability</p>
                                </div>
                              </div>
                              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                  <img class="w-8 h-8" src="https://radgifts.in/storage/01J8AWQJHGJ919ES6Y0EJ5Z1RJ.jpg" alt="Onboarding Employees">
                                </div>
                                <div class="flex-auto">
                                  <a href="/corporate-gifting/Onboarding" class="block font-semibold text-gray-900">
                                    Onboarding
                                    <span class="absolute inset-0"></span>
                                  </a>
                                  <p class="mt-1 text-gray-600">Welcome employees with gifts that highlight your branding</p>
                                </div>
                              </div>
                              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                  <img class="w-8 h-8" src="https://radgifts.in/storage/01J8AWRNR7KHHR8P1R36ET419J.jpg" alt="Bespoke Collections">
                                </div>
                                <div class="flex-auto">
                                  <a href="/corporate-gifting/bespoke" class="block font-semibold text-gray-900">
                                    Bespoke
                                    <span class="absolute inset-0"></span>
                                  </a>
                                  <p class="mt-1 text-gray-600"> Redefine the joy of giving with custom-made, personalized hampers. </p>
                                </div>
                              </div>
                              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                  <img class="w-8 h-8" src="https://radgifts.in/storage/01J8AWTRKHSNX3A144SJNH34G5.jpg" alt="Packaging">
                                </div>
                                <div class="flex-auto">
                                  <a href="/corporate-gifting/packaging" class="block font-semibold text-gray-900">
                                    Packaging
                                    <span class="absolute inset-0"></span>
                                  </a>
                                  <p class="mt-1 text-gray-600"> Enhance the unboxing experience with wood, acrylic, rigid boxes, jute bags</p>
                                </div>
                              </div>
                            </div>
                            <div class="bg-gray-50">
                              <a href="{{ route('pages.corporate') }}" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                  <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" />
                                </svg>
                                View All Corporate Collections
                              </a>
                            </div>
                          </div>
                        </div>
                  
                        <a href="{{ route('pages.personal') }}" class="text-sm font-semibold leading-6 text-gray-900">Personal</a>
                        <a href="{{ route('pages.works') }}" class="text-sm font-semibold leading-6 text-gray-900">Our Portfolio</a>
                        <a href="{{ route('pages.about') }}" class="text-sm font-semibold leading-6 text-gray-900">About</a>
                        <a href="{{ route('filamentblog.post.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Resources</a>
                        <a href="{{ route('pages.contact') }}" class="text-sm font-semibold leading-6 text-gray-900">Contact Us</a>
                    </div>
                    
                    <div class="flex space-x-2">
                        <x-nav-link href="https://www.linkedin.com/in/rad-gifts-770761236" class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.569" height="18.569" viewBox="0 0 18.569 18.569">
                                <path id="Icon_akar-linkedin-fill" data-name="Icon akar-linkedin-fill" d="M9.9,9.47h3.448v1.718A3.956,3.956,0,0,1,17.03,9.312c3.668,0,4.539,1.966,4.539,5.574v6.682H17.855v-5.86c0-2.055-.5-3.213-1.761-3.213-1.754,0-2.483,1.249-2.483,3.212v5.861H9.9V9.47ZM3.529,21.411H7.243V9.312H3.529v12.1ZM7.775,5.367a2.349,2.349,0,0,1-.7,1.673A2.387,2.387,0,0,1,3,5.367a2.353,2.353,0,0,1,.7-1.674,2.4,2.4,0,0,1,3.377,0A2.357,2.357,0,0,1,7.775,5.367Z" transform="translate(-3 -3)" fill="#4c3278"/>
                            </svg>                              
                        </x-nav-link>
                        <x-nav-link href="https://www.instagram.com/radgifts_india/" class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                <g id="Group_230" data-name="Group 230" transform="translate(0 0)">
                                <path id="Path_6" data-name="Path 6" d="M30.135,60.912a1.348,1.348,0,1,0,1.348,1.348,1.348,1.348,0,0,0-1.348-1.348" transform="translate(-12.545 -56.805)" fill="#341D66"/>
                                <path id="Path_7" data-name="Path 7" d="M18.59,63.572a5.664,5.664,0,1,0,5.664,5.665,5.671,5.671,0,0,0-5.664-5.665m0,9.293a3.628,3.628,0,1,1,3.628-3.628,3.633,3.633,0,0,1-3.628,3.628" transform="translate(-6.995 -57.736)" fill="#341D66"/>
                                <path id="Path_8" data-name="Path 8" d="M19.893,77.594H10.711A6.917,6.917,0,0,1,3.8,70.685V61.5a6.917,6.917,0,0,1,6.909-6.909h9.182A6.916,6.916,0,0,1,26.8,61.5v9.183a6.916,6.916,0,0,1-6.909,6.909M10.711,56.758A4.749,4.749,0,0,0,5.967,61.5v9.183a4.749,4.749,0,0,0,4.745,4.745h9.182a4.75,4.75,0,0,0,4.745-4.745V61.5a4.75,4.75,0,0,0-4.745-4.745Z" transform="translate(-3.802 -54.594)" fill="#341D66"/>
                                </g>
                            </svg>                          
                        </x-nav-link>
                        <x-nav-link href="https://wa.me/+919150241115" class="bg-primary-dark text-white hover:bg-accent-dark hover:text-white px-4 py-2 rounded-full self-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.943" height="23" viewBox="0 0 22.943 23">
                                <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="22.943" height="23" fill="#FFF"/>
                                </clipPath>
                                </defs>
                                <g id="Group_231" data-name="Group 231" transform="translate(0 0)">
                                <g id="Group_5" data-name="Group 5" transform="translate(0 0)" clip-path="url(#clip-path)">
                                    <path id="Path_10" data-name="Path 10" d="M0,23l1.649-6.152a11.384,11.384,0,1,1,4.535,4.5Zm6.491-3.962.389.232a9.242,9.242,0,1,0-3.162-3.134l.239.393-.92,3.435Z" transform="translate(0 0)" fill="#FFF"/>
                                    <path id="Path_11" data-name="Path 11" d="M19.088,16.261a1.91,1.91,0,0,0-1.627-.367c-.423.173-.692.835-.966,1.172a.4.4,0,0,1-.524.114,7.37,7.37,0,0,1-3.677-3.15.451.451,0,0,1,.057-.616,2.494,2.494,0,0,0,.668-1.084,2.371,2.371,0,0,0-.3-1.284,3.038,3.038,0,0,0-.948-1.428,1.3,1.3,0,0,0-1.41.209A2.864,2.864,0,0,0,9.37,12.1a3.216,3.216,0,0,0,.089.72,5.945,5.945,0,0,0,.691,1.591,12.639,12.639,0,0,0,.72,1.1A11.14,11.14,0,0,0,14,18.406a9.452,9.452,0,0,0,1.949.927,4.327,4.327,0,0,0,2.269.359,2.748,2.748,0,0,0,2.058-1.531,1.333,1.333,0,0,0,.1-.781c-.118-.538-.846-.858-1.281-1.118" transform="translate(-3.279 -3.321)" fill="#FFF" fill-rule="evenodd"/>
                                </g>
                                </g>
                            </svg> 
                            WhatsApp Us
                        </x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-2">
                @guest
                    {{--
                    <x-responsive-nav-link href="{{ route('login') }}">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                    --}}
                @else
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 me-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif
                    <div>
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                @endguest
            </div>

            <div class="mt-3 space-y-1 px-2">
                <div x-data="{ mobopen: false }" class="">
                    <button @click="mobopen = !mobopen" type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-4 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                      Corporate
                      <!--
                        Expand/collapse icon, toggle classes based on menu open state.
      
                        Open: "rotate-180", Closed: ""
                      -->
                      <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                      </svg>
                    </button>
                    <!-- 'Product' sub-menu, show/hide based on menu state. -->
                    <div x-show="mobopen" class="mt-2 space-y-2" id="disclosure-1">
                      <a href="/corporate-gifting/festive" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">Festive</a>
                      <a href="/corporate-gifting/eco-friendly" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">Eco-friendly</a>
                      <a href="/corporate-gifting/Onboarding" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">Onboarding</a>
                      <a href="/corporate-gifting/bespoke" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">Bespoke</a>
                      <a href="/corporate-gifting/packaging" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">Packaging</a>
                      
                      <a href="{{ route('pages.corporate') }}" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-medium leading-7 text-gray-700 hover:bg-gray-50">View All Corporate Collections</a>
                    </div>
                </div>
                <x-responsive-nav-link class="py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('pages.personal') }}">
                    Personal
                </x-responsive-nav-link>
                <x-responsive-nav-link class="py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('pages.works') }}">
                    Our Portfolio
                </x-responsive-nav-link>
                <x-responsive-nav-link class="py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('pages.about') }}">
                    About
                </x-responsive-nav-link>
                <x-responsive-nav-link class="py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('filamentblog.post.index') }}">
                    Resources
                </x-responsive-nav-link>
                <x-responsive-nav-link class="py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('pages.contact') }}">
                    Contact Us
                </x-responsive-nav-link>
                @guest
                    {{-- Do Nothing --}}
                @else
                    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                @endguest
            </div>
        </div>
    </div>
</nav>
