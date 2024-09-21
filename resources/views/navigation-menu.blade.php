<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 py-3 border-b border-gray-100 dark:border-gray-700">
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
                    <div class="flex space-x-2 xl:space-x-8">
                        <x-nav-link href="{{ route('pages.corporate') }}">
                            Corporate
                        </x-nav-link>
                        <x-nav-link href="{{ route('pages.personal') }}">
                            Personal
                        </x-nav-link>
                        <x-nav-link href="{{ route('pages.works') }}">
                            Our Portfolio
                        </x-nav-link>
                        <x-nav-link href="{{ route('pages.about') }}">
                            About
                        </x-nav-link>
                        <x-nav-link href="{{ route('filamentblog.post.index') }}">
                            Resources
                        </x-nav-link>
                        <x-nav-link href="{{ route('pages.contact') }}">
                            Contact Us
                        </x-nav-link>
                    </div>
                    <div class="flex space-x-2">
                        <x-nav-link class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.569" height="18.569" viewBox="0 0 18.569 18.569">
                                <path id="Icon_akar-linkedin-fill" data-name="Icon akar-linkedin-fill" d="M9.9,9.47h3.448v1.718A3.956,3.956,0,0,1,17.03,9.312c3.668,0,4.539,1.966,4.539,5.574v6.682H17.855v-5.86c0-2.055-.5-3.213-1.761-3.213-1.754,0-2.483,1.249-2.483,3.212v5.861H9.9V9.47ZM3.529,21.411H7.243V9.312H3.529v12.1ZM7.775,5.367a2.349,2.349,0,0,1-.7,1.673A2.387,2.387,0,0,1,3,5.367a2.353,2.353,0,0,1,.7-1.674,2.4,2.4,0,0,1,3.377,0A2.357,2.357,0,0,1,7.775,5.367Z" transform="translate(-3 -3)" fill="#4c3278"/>
                            </svg>                              
                        </x-nav-link>
                        <x-nav-link class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                <g id="Group_230" data-name="Group 230" transform="translate(0 0)">
                                <path id="Path_6" data-name="Path 6" d="M30.135,60.912a1.348,1.348,0,1,0,1.348,1.348,1.348,1.348,0,0,0-1.348-1.348" transform="translate(-12.545 -56.805)" fill="#111"/>
                                <path id="Path_7" data-name="Path 7" d="M18.59,63.572a5.664,5.664,0,1,0,5.664,5.665,5.671,5.671,0,0,0-5.664-5.665m0,9.293a3.628,3.628,0,1,1,3.628-3.628,3.633,3.633,0,0,1-3.628,3.628" transform="translate(-6.995 -57.736)" fill="#111"/>
                                <path id="Path_8" data-name="Path 8" d="M19.893,77.594H10.711A6.917,6.917,0,0,1,3.8,70.685V61.5a6.917,6.917,0,0,1,6.909-6.909h9.182A6.916,6.916,0,0,1,26.8,61.5v9.183a6.916,6.916,0,0,1-6.909,6.909M10.711,56.758A4.749,4.749,0,0,0,5.967,61.5v9.183a4.749,4.749,0,0,0,4.745,4.745h9.182a4.75,4.75,0,0,0,4.745-4.745V61.5a4.75,4.75,0,0,0-4.745-4.745Z" transform="translate(-3.802 -54.594)" fill="#111"/>
                                </g>
                            </svg>                          
                        </x-nav-link>
                        <x-nav-link class="bg-primary-dark text-white px-4 py-2 rounded-full self-center">
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

            <div class="hidden md:flex md:items-center md:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                {{-- 
                <div class="ms-3 relative">
                    @guest
                        <x-nav-link href="{{ route('login') }}"> Login </x-nav-link>
                    @else
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}

                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">

                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endguest
                </div>
                --}}
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
                <x-responsive-nav-link href="{{ route('pages.corporate') }}">
                    Corporate
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('pages.personal') }}">
                    Personal
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('pages.works') }}">
                    Our Portfolio
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('pages.about') }}">
                    About
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('filamentblog.post.index') }}">
                    Resources
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('pages.contact') }}">
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

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-responsive-nav-link>
                        @endcan

                        <!-- Team Switcher -->
                        @if (Auth::user()->allTeams()->count() > 1)
                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="responsive-nav-link" />
                            @endforeach
                        @endif
                    @endif
                @endguest
            </div>
        </div>
    </div>
</nav>
